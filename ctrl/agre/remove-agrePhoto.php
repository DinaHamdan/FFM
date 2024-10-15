<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';



class RemoveAgrePhoto extends Ctrl
{
    function do(): void
    {  //Check if user is logged and has admin privileges
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        $idPhotoAgre = $_GET['id'];

        LibAgre::deleteAgrePhoto($idPhotoAgre);
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        header('Location: ' . '/agre/list-agre');
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new RemoveAgrePhoto();
$ctrl->execute();
