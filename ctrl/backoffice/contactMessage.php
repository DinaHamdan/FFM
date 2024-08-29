<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class ListContact extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        $listContactMessage = LibMember::getAllContactMessage();
        $_SESSION['listContactMessage'] = $listContactMessage;
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/contact.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Messages de contact';
    }
}

$ctrl = new ListContact();
$ctrl->execute();
