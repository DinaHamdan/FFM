<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class ContactDisplay extends Ctrl
{
    function do(): void
    {
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/contact-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Page de contact';
    }
}

$ctrl = new ContactDisplay();
$ctrl->execute();
