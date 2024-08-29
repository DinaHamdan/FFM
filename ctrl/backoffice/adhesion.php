<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class ListAdhesion extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        $listAdhesion = LibMember::getAllAdhesion();
        $_SESSION['listAdhesion'] = $listAdhesion;
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/adhesion.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Adhésions';
    }
}

$ctrl = new ListAdhesion();
$ctrl->execute();
