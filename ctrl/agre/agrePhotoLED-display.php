<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DisplayAgrePhotoLED extends Ctrl
{
    function do(): void
    {
        $idCategory = 2;
        $idAgre = $_GET['id'];
        $_SESSION['listAgrePhoto'] = LibAgre::getAgrePhoto($idAgre, $idCategory);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/agrePhoto-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }


    function getPageTitle(): string
    {
        return 'Photo des agrès';
    }
}

$ctrl = new DisplayAgrePhotoLED();
$ctrl->execute();
