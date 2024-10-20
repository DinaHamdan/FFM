<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/discussion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class DiscussionDetail extends Ctrl
{
    function do(): void
    {
        $isGranted = $this->hasRole(Role::MEMBER);
        $isGranted = $this->hasRole(Role::ADMIN);
        if (!$isGranted) {
            header('Location: ' . '/');
        }
        $idDiscussion = $_GET['id'];
        $discussion = LibDiscussion::getDiscussion($idDiscussion);
        $this->viewArgs['discussion'] = $discussion;
    }

    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/forum/discussion-detail.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }


    function getPageTitle(): string
    {
        return 'Discussion details';
    }
}

$ctrl = new DiscussionDetail();
$ctrl->execute();
