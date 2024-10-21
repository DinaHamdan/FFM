<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DisplayAgrePhotoFire extends Ctrl
{
    function do(): void
    {

        //define the id of the fire category
        $idCategory = 1;

        //get the id of the prop clicked on from the gallery
        $idAgre = $_GET['id'];

        //get photos from db and save them in the viewArgs array
        $this->viewArgs['listAgrePhoto'] = LibAgre::getAgrePhoto($idAgre, $idCategory);

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

$ctrl = new DisplayAgrePhotoFire();
$ctrl->execute();
