<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/imgType.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class AddAgrePhoto extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);

        //Initier une session  d'un objet msg avec info et erreur comme objet
        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];

        //Read information entered by admin
        $idTypeagre = htmlspecialchars($_POST['agreType']);
        $idCategory = htmlspecialchars($_POST['category']);


        $fileNames = $_FILES['agrePhoto']['name'];
        $fileSizes = $_FILES['agrePhoto']['size'];
        $fileTmps = $_FILES['agrePhoto']['tmp_name'];
        $fileTypes = $_FILES['agrePhoto']['type'];

        foreach ($fileNames as $key => $name) {
            $fileName = $fileNames[$key];
            $fileSize = $fileSizes[$key];
            $fileTmpName = $fileTmps[$key];
            $fileType = $fileTypes[$key];





            $png = Type::MY_IMG_PNG;
            $jpg = Type::MY_IMG_JPG;

            $listAcceptedFileTypes = [$png, $jpg];

            $acceptedFilesize = Type::FILE_MAX_SIZE;


            // Put in place several tests on the the uploaded photo to check if it has the right file type
            $isSupportedFileType = in_array($fileType, $listAcceptedFileTypes);

            if (!$isSupportedFileType) {
                echo 'is not accepted files';
                // Add a flash message
                $_SESSION['msg']['error'][] = 'Les seuls formats de fichier acceptés sont : ' . implode(',', $listAcceptedFileTypes);
            }
            if (true) {
                if ($fileSize > $acceptedFilesize) {
                    $_SESSION['msg']['error'][] = 'La taille de la photo est trop grand';
                    echo 'too big';
                }
            }

            $hasErrors = !empty($_SESSION['msg']['error']);
            if ($hasErrors) {
                // Redirect towards the form to correct the photo upload
                header('Location: ' . '/ctrl/agre/add-agre-display.php');
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
            //TODO Need to add algorithm to check for photo width and height and change it accordingly
            //do not add width and height because it will affect dimension and quality
            //serveur petit et grand , petit pour la vignette
            $img = imagescale($imgOriginal, 800, -1, IMG_BICUBIC);

            $imgSharpened = imagesetinterpolation($img, IMG_SINC);

            imagepng($img, $fileTmpName);

            // Ajoute un flash-message
            $_SESSION['msg']['info'][] = 'La photo a été ajouté';

            //open binary image file and rb to make sure it's read by all operating systems
            $binaryFile = fopen($fileTmpName, 'rb');
            $nameFile = basename($fileName);

            $dateTime = date('Y-m-d h:i:s');
            // ("Y-m-d h:i:s")

            //Add photo
            $isSuccess = LibAgre::AddAgrePhoto($idCategory, $idTypeagre, $binaryFile, $nameFile, $dateTime);
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

        header('Location: ' . '/agre/list-agre');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new AddAgrePhoto();
$ctrl->execute();
