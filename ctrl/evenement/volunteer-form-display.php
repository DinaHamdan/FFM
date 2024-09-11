<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/event.php';

class VolunteerFormDisplay extends Ctrl
{
    function do(): void
    {

        $isGrantedAdmin = $this->hasRole(Role::ADMIN);
        $isGrantedMember = $this->hasRole(Role::MEMBER);

        if ($isGrantedAdmin) {
            $_SESSION['user']['codeRole'] == "ADM";
        } elseif ($isGrantedMember) {
            $_SESSION['user']['codeRole'] == "MEM";
        } else {
            $_SESSION['user'] = [];
            $_SESSION['user']['codeRole'] = [];
        };
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/evenement/volunteer-form-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
        //return 'Devenir Bénévole';
    }
}

$ctrl = new VolunteerFormDisplay();
$ctrl->execute();
