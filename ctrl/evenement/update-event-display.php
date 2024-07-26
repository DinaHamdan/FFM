<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/event.php';

class UpdateEventDisplay extends Ctrl
{
    function do(): void
    {
        $conventionInfo = LibEvent::getEvent();
        $_SESSION['convention'] = $conventionInfo;
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/evenement/update-event-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Modifier l événement';
    }
}

$ctrl = new UpdateEventDisplay();
$ctrl->execute();
