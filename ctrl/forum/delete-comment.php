<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DeleteComment extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        $idComment = $_GET['id'];
        $isSucces = LibDiscussion::deleteComment($idComment);
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

$ctrl = new DeleteComment();
$ctrl->execute();
