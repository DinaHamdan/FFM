<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';


class Homepage extends Ctrl
{
    function do(): void
    {


        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        /* 
        if (!$isGranted) {
            header('Location: ' . '/ctrl/forum/forum-display.php');
        } */
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/backoffice.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new Homepage();
$ctrl->execute();
