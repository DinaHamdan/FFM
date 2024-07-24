<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';



class RemoveAgreDisplay extends Ctrl
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

        header('Location: ' . '/ctrl/agre/agre-display.php');
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new RemoveAgreDisplay();
$ctrl->execute();
