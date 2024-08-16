<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class Forum extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::MEMBER);
        $isGranted = $this->hasRole(Role::ADMIN);
        $listDiscussion = LibDiscussion::getAllDiscussion();
        $_SESSION['listDiscussion'] = $listDiscussion;
        //var_dump($listPost);
        // var_dump($_SESSION['user']); 
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/forum/forum-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
        //return 'Forum!';
    }
}

$ctrl = new Forum();
$ctrl->execute();
