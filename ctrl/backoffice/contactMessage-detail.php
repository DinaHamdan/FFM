<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class ContactMessageDetail extends Ctrl
{
    function do(): void
    {
        $isGranted = $this->hasRole(Role::ADMIN);

        if (!$isGranted) {
            header('Location: ' . '/forum/forum-display');
        }
        $idContactMessage = $_GET['id'];
        $contactMessage = LibMember::getContactMessage($idContactMessage);
        $this->viewArgs['contactMessage'] = $contactMessage;
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/contactMessage-detail.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }


    function getPageTitle(): string
    {
        return 'Message de';
    }
}

$ctrl = new ContactMessageDetail();
$ctrl->execute();
