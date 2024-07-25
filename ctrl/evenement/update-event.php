<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/imgType.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/event.php';

class UpdateEvent extends Ctrl
{
    function do(): void
    {


        $convention = [];

        $convention['cost'] = htmlspecialchars($_POST['conventionCost']);

        $convention['conventionFirstDay'] = htmlspecialchars($_POST['conventionFirstDay']);

        $convention['contentFirstDay'] = htmlspecialchars($_POST['contentFirstDay']);

        $convention['conventionSecondDay'] = htmlspecialchars($_POST['conventionSecondDay']);
        $convention['contentSecondDay'] = htmlspecialchars($_POST['contentSecondDay']);

        $convention['conventionThirdDay'] = htmlspecialchars($_POST['conventionThirdDay']);

        $convention['contentThirdDay'] = htmlspecialchars($_POST['contentThirdDay']);

        $convention['conventionDescription'] = htmlspecialchars($_POST['conventionDescription']);

        $convention['address'] = htmlspecialchars($_POST['address']);

        $convention['description'] = htmlspecialchars($_POST['conventionDescription']);





        $png = Type::MY_IMG_PNG;
        $jpg = Type::MY_IMG_JPG;
        $acceptedFilesize = Type::FILE_MAX_SIZE;
        $listAcceptedFileTypes = [$png, $jpg];

        //Poster photo
        $posterFileName = $_FILES['conventionPhoto']['name'];
        $posterFileSize = $_FILES['conventionPhoto']['size'];
        $posterFileTmpName  = $_FILES['conventionPhoto']['tmp_name'];
        $posterFileType = $_FILES['conventionPhoto']['type'];

        //Program photo
        $programFileName = $_FILES['programPhoto']['name'];
        $programFileSize = $_FILES['programPhoto']['size'];
        $programFileTmpName  = $_FILES['programPhoto']['tmp_name'];
        $programFileType = $_FILES['programPhoto']['type'];



        // Put in place several tests on the the uploaded photo to check if it has the right file type
        $isPosterSupportedFileType = in_array($posterFileType, $listAcceptedFileTypes);
        $isProgramSupportedFileType = in_array($programFileType, $listAcceptedFileTypes);

        if (!$isPosterSupportedFileType) {
            $_SESSION['msg']['error'][] = 'Les seuls formats de fichier acceptés sont : ' . implode(',', $listAcceptedFileTypes);
        }
        if (true) {
            echo 'all good';
            if ($posterFileSize > $acceptedFilesize) {
                $_SESSION['msg']['error'][] = 'Le taille de la photo est trop grand';
                //Add redirection
            }
        }

        $hasErrors = !empty($_SESSION['msg']['error']);
        if ($hasErrors) {
            header('Location: ' . '/ctrl/evenement/event-display.php');
            exit();
        }

        if (!$isProgramSupportedFileType) {
            $_SESSION['msg']['error'][] = 'Les seuls formats de fichier acceptés sont : ' . implode(',', $listAcceptedFileTypes);
        }
        if (true) {
            echo 'all good';
            if ($programFileSize > $acceptedFilesize) {
                $_SESSION['msg']['error'][] = 'Le taille de la photo est trop grand';
                //Add redirection
            }
        }

        $hasErrors = !empty($_SESSION['msg']['error']);
        if ($hasErrors) {
            header('Location: ' . '/ctrl/evenement/event-display.php');
            exit();
        }
        //Poster
        ///////////////////////////////////////////
        if ($posterFileType == $png) {
            $imPosterOriginal = imagecreatefrompng($posterFileTmpName);
        }
        if ($posterFileType == $jpg) {
            $imPosterOriginal = imagecreatefromjpeg($posterFileTmpName);
        }
        //rescaling image
        $imgPoster = imagescale($imPosterOriginal, 200);
        imagepng($imgPoster, $posterFileTmpName);


        // Program
        //////////////////////////////////////////////
        if ($programFileType == $png) {
            $imgProgramOriginal = imagecreatefrompng($programFileTmpName);
        }
        if ($programFileType == $jpg) {
            $imgProgramOriginal = imagecreatefromjpeg($programFileTmpName);
        }
        //rescaling image
        $imgProgram = imagescale($imgProgramOriginal, 200);
        imagepng($imgProgram, $programFileTmpName);


        // Flash message
        $_SESSION['msg']['info'][] = 'L évenement a été modifié';

        //open binary image file and rb to make sure it's read by all operating systems

        //Poster
        $posterBinaryFile = fopen($posterFileTmpName, 'rb');
        $posterNameFile = basename($posterFileName);
        //Programm
        $programBinaryFile = fopen($programFileTmpName, 'rb');
        $programNameFile = basename($programFileName);


        //update event 
        $isSuccess = LibEvent::updateEvent($convention['conventionFirstDay'], $convention['conventionSecondDay'], $convention['conventionThirdDay'], $convention['contentFirstDay'], $convention['contentSecondDay'],  $convention['conventionThirdDay'], $convention['address'], $convention['cost'], $convention['description'], $posterBinaryFile, $posterNameFile, $programBinaryFile, $programNameFile);
        //Create a directory to save uploaded photos

        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
        // Copy the image file into the photo directory
        //Poster
        $uploadPath = $uploadDirectory . basename($posterFileName);
        $didUpload = move_uploaded_file($posterFileTmpName, $uploadPath);
        // Programm
        $uploadPath = $uploadDirectory . basename($programFileName);
        $didUpload = move_uploaded_file($programFileTmpName, $uploadPath);
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/evenement/update-event-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Modifier l événement';
    }
}

$ctrl = new UpdateEvent();
$ctrl->execute();
