<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class Logout extends Ctrl
{
    function do(): void
    {
        unset($_SESSION['user']);
        unset($_SESSION['unexisting']);
        unset($_SESSION['incorrect']);
        unset($_SESSION['specialMessage']);
        unset($_SESSION['userAvatar']);
        $_SESSION['user'] = [];
        $_SESSION['user']['codeRole'] = [];
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        header('Location: ' . '/');
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new Logout();
$ctrl->execute();
