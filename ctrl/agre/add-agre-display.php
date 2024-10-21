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

        $this->viewArgs['typeAgre'] = LibAgre::getTypeAgre();
        $this->viewArgs['listCategory'] = LibAgre::getCategory();
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/add-agre-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Ajout de photos des Agrès';
    }
}

$ctrl = new AddAgreDisplay();
$ctrl->execute();
