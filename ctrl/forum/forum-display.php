<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
/* require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/post.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/user.php'; */

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class Forum extends Ctrl
{
    function do(): void
    {
        /* 
        $listPost = LibPost::getAllPost();
        $_SESSION['listPost'] = $listPost;
        //var_dump($listPost);
        // var_dump($_SESSION['user']); */
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
        return 'Forum!';
    }
}

$ctrl = new Forum();
$ctrl->execute();
