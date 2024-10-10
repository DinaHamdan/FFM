<?php

//Create user - gather data entered by user -redirect towards login page

//establish a connection to database and libray of functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';




class CreateAdhesion extends Ctrl
{
    function do(): void
    {


        //Gather data entered by adherent
        $adherent = [];
        $adherent['firstName'] = htmlspecialchars($_POST['visitorFirstName']);
        $adherent['lastName'] = htmlspecialchars($_POST['visitorLastName']);
        $adherent['email'] = htmlspecialchars($_POST['visitorEmail']);
        $adherent['phoneNumber'] = htmlspecialchars($_POST['visitorPhoneNumber']);

        //Post the type of agre as an array so i can implode it to string 
        foreach ($_POST['agreType'] as $agre[]);

        $adherent['agreType'] = implode(',', $agre);
        $adherent['typeAdhesion'] =  htmlspecialchars($_POST['participation']);

        $adherent['talents'] = htmlspecialchars($_POST['talents']);
        $adherent['authorization'] =  htmlspecialchars($_POST['oui_non']);
        $dateTime = date('Y-m-d h:i:s');
        //Flash messages 
        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];



        $isSuccess = LibMember::CreateAdhesion($adherent['firstName'], $adherent['lastName'], $adherent['email'], $adherent['phoneNumber'],  $adherent['agreType'], $adherent['typeAdhesion'], $adherent['talents'], $adherent['authorization'], $dateTime);
        // Ajoute un flash-message a garder
        if ($isSuccess) {
            $_SESSION['msg']['info'][] = 'Votre adhésion a été effectué';
        }


        // Redirige vers la page d'acceuil
        header('Location: ' . '/');
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



$ctrl = new CreateAdhesion();
$ctrl->execute();
