<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';


class Backoffice extends Ctrl
{
    function do(): void
    {
        $isGranted = $this->hasRole(Role::ADMIN);

        if (!$isGranted) {
            header('Location: ' . '/forum/forum-display');
        }
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/backoffice.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return "Backoffice";
    }
}

$ctrl = new Backoffice();
$ctrl->execute();
