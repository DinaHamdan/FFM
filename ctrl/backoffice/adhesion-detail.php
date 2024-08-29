<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class AdhesionDetail extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        $idAdhesion = $_GET['id'];
        $adhesion = LibMember::getAdhesion($idAdhesion);
        $_SESSION['adhesion'] = $adhesion;
    }

    function renderView(): void
    {
        $args = $this->viewArgs;
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/adhesion-detail.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Adhésion de';
    }
}

$ctrl = new AdhesionDetail();
$ctrl->execute();
