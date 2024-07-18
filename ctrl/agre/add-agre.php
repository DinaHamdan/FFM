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
        /* 
        if (isset($_FILES['files'])) {
            $errors = [];
            $uploadedFiles = [];
            $uploadPath = 'uploads/'; // Specify the directory to store the uploaded files
            $fileNames = $_FILES['agrePhoto']['name'];
            $fileSizes = $_FILES['agrePhoto']['size'];
            $fileTmps = $_FILES['agrePhoto']['tmp_name'];
            $fileTypes = $_FILES['agrePhoto']['type'];
            foreach ($fileNames as $key => $name) {
                $fileSize = $fileSizes[$key];
                $fileTmp = $fileTmps[$key];
                $fileType = $fileTypes[$key];
                // Validate and process each uploaded file
                // Add your validation logic here
                // Generate a unique filename to avoid conflicts
                $fileName = uniqid() . '_' . $name;
                // Move the uploaded file to the specified directory
                $destination = $uploadPath . $fileName;
                if (move_uploaded_file($fileTmp, $destination)) {
                    $uploadedFiles[] = $destination;
                } else {
                    $errors[] = "Failed to upload {$name}";
                }
            }
            if (!empty($errors)) {
                // Handle errors encountered during the upload process
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
            }
            if (!empty($uploadedFiles)) {
                // File upload succeeded
                // Perform further operations or display success message
                foreach ($uploadedFiles as $file) {
                    echo "File uploaded: " . $file . "<br>";
                }
            }
        }

 */

        //Read information entered by admin


        $idTypeagre = $_POST['agreType'];
        $idCategory = $_POST['category'];


        $fileNames = $_FILES['agrePhoto']['name'];
        $fileSizes = $_FILES['agrePhoto']['size'];
        $fileTmps = $_FILES['agrePhoto']['tmp_name'];
        $fileTypes = $_FILES['agrePhoto']['type'];
        foreach ($fileNames as $key => $name) {
            $fileName = $fileNames[$key];
            $fileSize = $fileSizes[$key];
            $fileTmpName = $fileTmps[$key];
            $fileType = $fileTypes[$key];




            //Initier une session  d'un objet msg avec info et erreur comme objet
            $_SESSION['msg']['info'] = [];
            $_SESSION['msg']['error'] = [];



            $png = Type::MY_IMG_PNG;
            $jpg = Type::MY_IMG_JPG;
            $null = Type::NULL;

            $listAcceptedFileTypes = [$png, $jpg, $null];

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
                header('Location: ' . '/ctrl/forum/forum-display.php');
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
            $_SESSION['msg']['info'][] = 'La photo a été posté';

            //open binary image file and rb to make sure it's read by all operating systems
            $binaryFile = fopen($fileTmpName, 'rb');
            $nameFile = basename($fileName);

            echo 'this is the temporary file name' . $fileTmpName;
            echo 'this is the file type' . $fileType;
            echo 'this is the file name' . $fileName;
            echo 'this is the file size' . $fileSize;
            /*         echo 'this is imgorginal' . $imgOriginal;
 */
            $dateTime = date('Y-m-d h:i:s');
            // ("Y-m-d h:i:s")
            if ($fileType == $null) {
                // $imgOriginal = imageCreateFromAny($fileTmpName);

                $binaryFile = 'NA';
                $nameFile = 'NA';
            }

            //Create Post
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

        header('Location: ' . '/ctrl/agre/agre-display.php');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new AddAgrePhoto();
$ctrl->execute();
