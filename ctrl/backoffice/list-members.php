<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class listMember extends Ctrl
{
    function do(): void
    {
        $isGranted = $this->hasRole(Role::ADMIN);

        if (!$isGranted) {
            header('Location: ' . '/forum/forum-display');
        }

        $listMember = LibMember::listAllMember();
        $this->viewArgs['listMember'] = $listMember;

        /*  $idMember = $_GET['id'];

        $isSucces = LibMember::deleteMember($idMember); */
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/list-members.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }


    function getPageTitle(): string
    {
        return "Membres Actifs";
    }
}

$ctrl = new listMember();
$ctrl->execute();
