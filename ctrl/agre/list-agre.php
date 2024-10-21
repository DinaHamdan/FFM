<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/agre.php';


class AgreDisplay extends Ctrl
{
    function do(): void
    {

        /*  $idCategoryFeu = 1;
        $_SESSION['typeAgreFeu'] = LibAgre::getGallerieTypeAgre($idCategoryFeu);
        $idCategoryLED = 2;
        $_SESSION['typeAgreLED'] = LibAgre::getGallerieTypeAgre($idCategoryLED); */



        $isMain = 'true';
        $idCategoryFeu = 1;
        $this->viewArgs['typeAgreFeu'] = LibAgre::getGallerieTypeAgre($idCategoryFeu, $isMain);
        $idCategoryLED = 2;
        $this->viewArgs['typeAgreLED'] = LibAgre::getGallerieTypeAgre($idCategoryLED, $isMain);
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/agre/list-agre.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): string
    {
        return 'Galerie Agrè';
    }
}

$ctrl = new AgreDisplay();
$ctrl->execute();
