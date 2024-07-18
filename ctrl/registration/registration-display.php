<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class Createdisplay extends Ctrl
{
    function do(): void
    {  //Check if user is logged and has admin privileges
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
        //Rends la vue
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/registration-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Hello Admin, please create members';
    }
}

$ctrl = new Createdisplay();
$ctrl->execute();
