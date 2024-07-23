<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class ChooseMainPhoto extends Ctrl
{
    function do(): void
    {
        $isMain = 'true';
        $idPhotoAgre = $_POST['mainPhoto'];

        LibAgre::chooseMainPhoto($idPhotoAgre, $isMain);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/agrePhoto-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new ChooseMainPhoto();
$ctrl->execute();
