<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class UpdatePropDisplay extends Ctrl
{
    function do(): void
    { //Check if user is logged and has admin privileges
        $isGranted = $this->hasRole(Role::ADMIN);
        if (!$isGranted) {
            header('Location: ' . '/agre/list-agre');
        }
        $idAgre = $_GET['id'];

        $this->viewArgs['idAgre'] = $idAgre;
        $this->viewArgs['agreById'] = LibAgre::getAgrebyId($idAgre);

        LibAgre::deleteAgreCategory($idAgre);
        //get agreType Id and category Id
        $this->viewArgs['listCategory'] = LibAgre::getCategory();
        $this->viewArgs['listAgreTypeCategory'] = LibAgre::getIdTypeIdCategory();
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
        //Rends la vue
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/agre-update-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Modification Agrè';
    }
}

$ctrl = new UpdatePropDisplay();
$ctrl->execute();
