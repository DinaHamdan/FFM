<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DisplayAgrePhotoLED extends Ctrl
{
    function do(): void
    { //Check if user has a role
        $isGranted = $this->hasRole(Role::ADMIN);
        $isGranted = $this->hasRole(Role::ADMIN);
        if ($isGranted) {
            $_SESSION['user']['codeRole'] == "ADM";
        } else {
            $_SESSION['user']['codeRole'] = [];
        }

        //define the id of the LED category
        $idCategory = 2;
        //get the id of the prop clicked on from the gallery
        $idAgre = $_GET['id'];


        // OLD code  $_SESSION['listAgrePhoto']= LibAgre::getAgrePhoto($idAgre, $idCategory);
        //get photos from db and save them in the viewArgs array
        $this->viewArgs['listAgrePhoto'] = LibAgre::getAgrePhoto($idAgre, $idCategory);

        // Old code $_SESSION['agreName'] = $agreName['name'];
        //get prop name from db and save them in the viewArgs array
        $agreName = LibAgre::getAgreName($idAgre);
        $this->viewArgs['agreName'] = $agreName['name'];
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/agrePhoto.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }


    function getPageTitle(): string
    {
        return 'Photo des agrès';
    }
}

$ctrl = new DisplayAgrePhotoLED();
$ctrl->execute();
