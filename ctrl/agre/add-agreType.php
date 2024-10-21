<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/imgType.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class AddAgreType extends Ctrl
{
    function do(): void
    {


        //Read information entered by admin
        foreach ($_POST['category'] as $category[])
            $categoryTypeAgre['category'] = implode(',', $category);

        //  $categoryTypeAgre  = $_POST['category'];
        $nameTypeAgre = htmlspecialchars($_POST['name']);
        $labelTypeAgre = htmlspecialchars($_POST['label']);
        //add an agre Type
        $isSuccess = LibAgre::AddAgreType($nameTypeAgre, $labelTypeAgre, $categoryTypeAgre['category']);

        //get Agre id 
        $getAgre = LibAgre::getIdType($nameTypeAgre);
        $idAgre = $getAgre[0]['id'];
        foreach ($_POST['category'] as $category) {

            $isAdded = LibAgre::addAgreCategory($idAgre, $category);
        }
    }


    function renderView(): void
    {
        $args = $this->viewArgs;
        //add redirection

        header('Location: ' . '/agre/add-agreType-display');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new AddAgreType();
$ctrl->execute();
