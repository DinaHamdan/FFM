<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class AgreDisplay extends Ctrl
{
    function do(): void
    {
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/agre-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Gallerie Agre';
    }
}

$ctrl = new AgreDisplay();
$ctrl->execute();
