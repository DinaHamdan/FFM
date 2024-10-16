<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class UpdatePropDisplay extends Ctrl
{
    function do(): void
    {
        $idAgre = $_GET['id'];

        $_SESSION['agreById'] = LibAgre::getAgrebyId($idAgre);
        LibAgre::deleteAgreCategory($idAgre);

        //get agreType Id and category Id
        $categoryType = LibAgre::getIdTypeIdCategory();
        $_SESSION['listAgreTypeCategory'] = $categoryType;
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
        //Rends la vue
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/agre-update-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Modification Agrè';
    }
}

$ctrl = new UpdatePropDisplay();
$ctrl->execute();
