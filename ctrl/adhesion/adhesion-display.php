<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class AdhereDisplay extends Ctrl
{
    function do(): void
    {
        $_SESSION['typeAgre'] = LibAgre::getTypeAgre();
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/adhesion-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
        /*         return 'Devenir Adhérent';
 */
    }
}

$ctrl = new AdhereDisplay();
$ctrl->execute();
