<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/event.php';


class EventDisplay extends Ctrl
{
    function do(): void
    {

        $conventionInfo = LibEvent::getEvent();
        $this->viewArgs['convention'] = $conventionInfo;
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/evenement/event.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {

        return 'Jongle En Zik';
    }
}

$ctrl = new EventDisplay();
$ctrl->execute();
