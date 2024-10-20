<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DeleteDiscussion extends Ctrl
{
    function do(): void
    {

        $idDiscussion = $_GET['id'];
        $isSucces = LibDiscussion::deleteComments($idDiscussion);
        $isSucces = LibDiscussion::deleteDiscussion($idDiscussion);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        header('Location: ' . '/forum/forum-display');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new DeleteDiscussion();
$ctrl->execute();
