<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class LoginDisplay extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/login-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return "Formulaire de Login";
    }
}

$ctrl = new LoginDisplay();
$ctrl->execute();
