<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class AgreAdminDisplay extends Ctrl
{
    function do(): void
    {


        $isGranted = $this->hasRole(Role::ADMIN);

        if (!$isGranted) {
            header('Location: ' . '/forum/forum-display');
        }

        //Admin
        $isNotMain = '';
        $idCategoryFeu = 1;
        //   $_SESSION['adminAgreFeu'] = LibAgre::getGallerieTypeAgre($idCategoryFeu, $isNotMain);
        $this->viewArgs['adminAgreFeu'] = LibAgre::getAdminTypeAgre($idCategoryFeu);

        $idCategoryLED = 2;
        //  $_SESSION['adminAgreLED'] = LibAgre::getGallerieTypeAgre($idCategoryLED, $isNotMain);
        $this->viewArgs['adminAgreLED'] = LibAgre::getAdminTypeAgre($idCategoryLED);
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/backoffice/admin-list-agre.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new AgreAdminDisplay();
$ctrl->execute();
