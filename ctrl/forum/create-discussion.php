<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/imgType.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class CreateDiscussion extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::MEMBER);
        $isGranted = $this->hasRole(Role::ADMIN);

        // Read blog contententered by user
        //Post content from formulaire
        $discussionTitle = htmlspecialchars($_POST['discussion-title']);
        $discussionContent = htmlspecialchars($_POST['discussion-content']);

        //Get user Id from session
        $idMember = $_SESSION['user']['id'];
        // echo ($_SESSION['user']);


        //Initier une session  d'un objet msg avec info et erreur comme objet
        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];


        $png = Type::MY_IMG_PNG;
        $jpg = Type::MY_IMG_JPG;
        $null = Type::NULL;

        $listAcceptedFileTypes = [$png, $jpg, $null];

        //Read information seized in the forum
        $fileName = $_FILES['discussionPhoto']['name'];
        $fileSize = $_FILES['discussionPhoto']['size'];

        //
        $fileTmpName  = $_FILES['discussionPhoto']['tmp_name'];
        $fileType = $_FILES['discussionPhoto']['type'];
        $dateTime = date('Y-m-d h:i:s');
        // Keeping this for the format of the date and time ("Y-m-d h:i:s")

        //If image file is empty create discussion with no photo
        if (($_FILES['discussionPhoto']['name'] == "")) {
            $isSuccess = LibDiscussion::createDiscussionNoPhoto($discussionTitle, $discussionContent, $idMember,  $dateTime);
            $_SESSION['msg']['info'][] = 'La discussion a été posté';

            //If file photo is not empty create discussion with photo
        } else {
            $acceptedFilesize = Type::FILE_MAX_SIZE;


            // Put in place several tests on the the uploaded photo to check if it has the right file type
            $isSupportedFileType = in_array($fileType, $listAcceptedFileTypes);

            if (!$isSupportedFileType) {

                // Add a flash message
                $_SESSION['msg']['error'][] = 'Les seuls formats de fichier acceptés sont : ' . implode(',', $listAcceptedFileTypes);
            }
            if (true) {
                if ($fileSize > $acceptedFilesize) {
                    echo 'photo too big';
                    $_SESSION['msg']['error'][] = 'Le taille de la photo est trop grand';
                }
            }

            $hasErrors = !empty($_SESSION['msg']['error']);
            if ($hasErrors) {
                // Redirect towards the form to correct the photo upload
                header('Location: ' . '/forum/forum-display');
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
            $_SESSION['msg']['info'][] = 'La discussion a été posté';

            //open binary image file and rb to make sure it's read by all operating systems
            $binaryFile = fopen($fileTmpName, 'rb');
            $nameFile = basename($fileName);


            /* 
            if ($fileType == $null) {
                // $imgOriginal = imageCreateFromAny($fileTmpName);

                $binaryFile = 'NA';
                $nameFile = 'NA';
            }
 */
            //Create Post
            $isSuccess = LibDiscussion::createDiscussionWithPhoto($discussionTitle, $discussionContent, $idMember, $binaryFile, $nameFile, $dateTime);
            //Create a directory to save uploaded photos

            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
            // Copy the image file into the photo directory
            $uploadPath = $uploadDirectory . basename($fileName);
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        }
    }



    function renderView(): void
    {
        $args = $this->viewArgs;
        //add redirection

        header('Location: ' . '/forum/forum-display');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new CreateDiscussion();
$ctrl->execute();
