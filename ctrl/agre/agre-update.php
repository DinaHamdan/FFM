<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class UpdateProp extends Ctrl
{
    function do(): void
    {
        header('Location: ' . '/agre/add-agreType-display');
    }
    function renderView(): void
    {
        $args = $this->viewArgs;
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new UpdateProp();
$ctrl->execute();
