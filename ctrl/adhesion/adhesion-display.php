<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';


class AdhereDisplay extends Ctrl
{
    function do(): void
    {
        $_SESSION['typeAgre'] = LibMember::getTypeAgre();
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/adhesion-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Devenir Adhérent';
    }
}

$ctrl = new AdhereDisplay();
$ctrl->execute();
