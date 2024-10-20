<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';



class RemoveAgrePhoto extends Ctrl
{
    function do(): void
    {
        $idPhotoAgre = $_GET['id'];
        LibAgre::deleteAgrePhoto($idPhotoAgre);
        header('Location: ' . '/agre/add-agreType-display');
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new RemoveAgrePhoto();
$ctrl->execute();
