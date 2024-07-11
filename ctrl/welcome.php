<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/user.php';


class Homepage extends Ctrl
{
    function do(): void
    {
        $_SESSION['user'] = [];
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/homepage.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new Homepage();
$ctrl->execute();
