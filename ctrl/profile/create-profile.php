<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/imgType.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class CreateProfile extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::MEMBER);


        //Gather data entered by user 
        $user = [];
        $user['fname'] = htmlspecialchars($_POST['firstName']);
        $user['lname'] = htmlspecialchars($_POST['lastName']);
        $user['phoneNumber'] = htmlspecialchars($_POST['phoneNumber']);


        //Get user Id from session
        $idMember = $_SESSION['user']['id'];
        // echo ($_SESSION['user']);


        //Initier une session  d'un objet msg avec info et erreur comme objet
        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];



        $png = Type::MY_IMG_PNG;
        $jpg = Type::MY_IMG_JPG;


        $listAcceptedFileTypes = [$png, $jpg];

        //Read information seized in the create a blog form
        $fileName = $_FILES['avatar']['name'];
        $fileSize = $_FILES['avatar']['size'];

        //
        $fileTmpName  = $_FILES['avatar']['tmp_name'];
        $fileType = $_FILES['avatar']['type'];



        $acceptedFilesize = Type::FILE_MAX_SIZE;


        // Put in place several tests on the the uploaded photo to check if it has the right file type
        $isSupportedFileType = in_array($fileType, $listAcceptedFileTypes);

        if (!$isSupportedFileType) {
            echo 'is not accepted files';

            // Add a flash message
            $_SESSION['msg']['error'][] = 'Les seuls formats de fichier acceptés sont : ' . implode(',', $listAcceptedFileTypes);
        }
        if (true) {
            echo 'all good';
            if ($fileSize > $acceptedFilesize) {
                echo 'photo too big';
                $_SESSION['msg']['error'][] = 'Le taille de la photo est trop grand';
            }
        }

        $hasErrors = !empty($_SESSION['msg']['error']);
        if ($hasErrors) {
            echo 'has errors.';
            // Redirect towards the form to correct the photo upload
            header('Location: ' . '/ctrl/profile/create-profile.php');
            exit();
        }

        // Resize the photo
        // WARN! sudo apt install php-gd
        // $imgOriginal;

        if ($fileType == $png) {
            $imgOriginal = imagecreatefrompng($fileTmpName);
        }
        if ($fileType == $jpg) {
            $imgOriginal = imagecreatefromjpeg($fileTmpName);
        }
        $img = imagescale($imgOriginal, 200);
        imagepng($img, $fileTmpName);


        // Ajoute un flash-message
        $_SESSION['msg']['info'][] = 'Le profile a été complété';

        $binaryFile = fopen($fileTmpName, 'rb');
        $nameFile = basename($fileName);

        echo 'this is the temporary file name' . $fileTmpName;
        echo 'this is the file type' . $fileType;
        echo 'this is the file name' . $fileName;
        echo 'this is the file size' . $fileSize;

        //Complete Profile 
        $isSuccess =  LibMember::completeProfile($idMember, $user['fname'], $user['lname'],  $user['phoneNumber'], $binaryFile, $nameFile);

        //Create a directory to save uploaded photos
        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
        // Copy the image file into the photo directory
        $uploadPath = $uploadDirectory . basename($fileName);
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        //add redirection

        header('Location: ' . '/ctrl/forum/forum-display.php');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new CreateProfile();
$ctrl->execute();
