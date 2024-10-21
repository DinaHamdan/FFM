<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';



class RemoveAgre extends Ctrl
{
    function do(): void
    {

        $idAgre = $_GET['id'];
        LibAgre::deleteAgrePhotoById($idAgre);
        LibAgre::deleteAgreCategory($idAgre);
        LibAgre::deleteAgre($idAgre);
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

$ctrl = new RemoveAgre();
$ctrl->execute();
