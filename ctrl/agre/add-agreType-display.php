<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';



class AddAgreDisplay extends Ctrl
{
    function do(): void
    {  //Check if user is logged and has admin privileges
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);


        $this->viewArgs['listCategory'] = LibAgre::getCategory();
        // old code   $_SESSION['listCategory'] = LibAgre::getCategory();

        //get agreType Id and category Id
        $listAgre =  LibAgre::getIdTypeIdCategory();

        $this->viewArgs['listAgreTypeCategory'] = $listAgre;
        // $this->viewArgs['listCategoryById'] = LibAgre::getCategoryByIdAgre();





        // old code $_SESSION['listAgreTypeCategory'] = LibAgre::getIdTypeIdCategory();
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/add-agreType-display.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Ajout des types Agrès';
    }
}

$ctrl = new AddAgreDisplay();
$ctrl->execute();
