<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class CreateComment extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::MEMBER || Role::ADMIN);


        $idDiscussion = $_POST['hidden_discussion_id'];
        $idMember = $_SESSION['user']['id'];
        $commentContent = htmlspecialchars($_POST['comment']);
        $dateTime = date('Y-m-d h:i:s');

        $comment = LibDiscussion::createComment($commentContent, $idMember,  $idDiscussion, $dateTime);
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        header('Location: ' . '/ctrl/forum/forum-display.php');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new CreateComment();
$ctrl->execute();
