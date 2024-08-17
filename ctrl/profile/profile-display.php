<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';


class CompleteProfile extends Ctrl
{
    function do(): void
    {
        $memberId = $_SESSION['user']['id'];
        $memberInfo = LibMember::getMemberById($memberId);
        $_SESSION['memberInfo'] = $memberInfo;
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
        //Rends la vue
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/profile-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Complète ton profil';
    }
}

$ctrl = new CompleteProfile();
$ctrl->execute();
