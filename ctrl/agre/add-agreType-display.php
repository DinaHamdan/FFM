<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';



class AddAgreDisplay extends Ctrl
{
    function do(): void
    {  //Check if user is logged and has admin privileges
        $isGranted = $this->hasRole(Role::ADMIN);
        if (!$isGranted) {
            header('Location: ' . '/agre/list-agre');
        }

        //Get category to show as options to add props
        $this->viewArgs['listCategory'] = LibAgre::getCategory();

        //get agre type and respective category to show in table
        $listAgre =  LibAgre::getIdTypeIdCategory();
        $this->viewArgs['listAgreTypeCategory'] = $listAgre;
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/add-agreType-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Ajout des types Agrès';
    }
}

$ctrl = new AddAgreDisplay();
$ctrl->execute();
