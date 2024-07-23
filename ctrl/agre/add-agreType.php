<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/imgType.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class AddAgreType extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);

        //Read information entered by admin
        foreach ($_POST['category'] as $category[])
            $categoryTypeAgre['category'] = implode(',', $category);

        //  $categoryTypeAgre  = $_POST['category'];

        $nameTypeAgre = htmlspecialchars($_POST['name']);
        $labelTypeAgre = htmlspecialchars($_POST['label']);


        //add an agre Type

        $isSuccess = LibAgre::AddAgreType($nameTypeAgre, $labelTypeAgre, $categoryTypeAgre['category']);

        foreach ($_POST['listIdAgre'] as $idAgre[]) {
            foreach ($_POST['listIdCategoryFire'] as $idCategoryFire[]);
            foreach ($_POST['listIdCategoryLED'] as $idCategoryLED[]);
            foreach ($_POST['listIdCategoryDayProp'] as $idCategoryDayProp[]);

            $isSuccess = LibAgre::addAgreCategoryFeu($idAgre, $idCategoryFire);
            $isSuccess = LibAgre::addAgreCategoryLED($idAgre, $idCategoryLED);
            $isSuccess = LibAgre::addAgreCategoryDayProp($idAgre, $idCategoryDayProp);
        };
    }


    function renderView(): void
    {
        $args = $this->viewArgs;
        //add redirection

        header('Location: ' . '/ctrl/agre/add-agreType-display.php');
    }


    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new AddAgreType();
$ctrl->execute();
