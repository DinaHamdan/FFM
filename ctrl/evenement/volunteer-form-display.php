<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class VolunteerFormDisplay extends Ctrl
{
    function do(): void
    {
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/evenement/volunteer-form-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Devenir Bénévole';
    }
}

$ctrl = new VolunteerFormDisplay();
$ctrl->execute();
