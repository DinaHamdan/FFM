<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class UpdateProp extends Ctrl
{
    function do(): void
    {
        $agreName = htmlspecialchars($_POST['agreName']);
        $agreLabel = htmlspecialchars($_POST['AgreLabel']);

        //Read information entered by admin
        foreach ($_POST['category'] as $category[])
            $categoryTypeAgre['category'] = implode(',', $category);

        $idAgre = htmlspecialchars($_POST['idAgre']);
        $isSuccess = LibAgre::UpdateAgreType($idAgre, $agreName, $agreLabel, $categoryTypeAgre['category']);

        //get Agre id 
        $getAgre = LibAgre::getIdType($agreName);
        $idAgre = $getAgre[0]['id'];
        foreach ($_POST['category'] as $category) {

            $isAdded = LibAgre::addAgreCategory($idAgre, $category);
            header('Location: ' . '/agre/add-agreType-display');
        }
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
