<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class Forum extends Ctrl
{
    function do(): void
    {
        $isGranted = $this->hasRole(Role::MEMBER);
        $isGranted = $this->hasRole(Role::ADMIN);
        if (!$isGranted) {
            header('Location: ' . '/');
        }
        $listDiscussion = LibDiscussion::getAllDiscussion();
        $this->viewArgs['listDiscussion'] = $listDiscussion;
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
    function getPageTitle(): string
    {
        return 'Forum';
    }
}

$ctrl = new Forum();
$ctrl->execute();
