<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DeleteMember extends Ctrl
{
    function do(): void
    {


        $idMember = $_GET['id'];

        $isSucces = LibMember::deleteMember($idMember);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        header('Location: ' . '/backoffice/list-member');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new DeleteMember();
$ctrl->execute();
