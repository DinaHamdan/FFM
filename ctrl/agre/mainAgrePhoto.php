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
        $isNotMain = '';
        $idPhotoAgre = htmlspecialchars($_POST['mainPhoto']);
        $idPhotoTypeAgre = htmlspecialchars($_POST['typeAgreOfPhoto']);
        $idPhotoCategory = htmlspecialchars($_POST['categoryOfPhoto']);
        $mainPhoto = LibAgre::checkMainPhoto($idPhotoTypeAgre, $idPhotoCategory, $isMain);

        $idMainPhotoAgre = $mainPhoto['id'];

        LibAgre::removeMainPhoto($idMainPhotoAgre, $isNotMain);
        LibAgre::chooseMainPhoto($idPhotoAgre, $isMain);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        header('Location: ' . '/ctrl/agre/agre-display.php');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new ChooseMainPhoto();
$ctrl->execute();
