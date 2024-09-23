<?php

//Create user - gather data entered by user -redirect towards login page

//establish a connection to database and libray of functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';




class Create extends Ctrl
{
    function do(): void
    {


        //Gather data entered by visitor
        $visitor = [];
        $visitor['firstName'] = htmlspecialchars($_POST['visitorFirstName']);
        $visitor['lastName'] = htmlspecialchars($_POST['visitorLastName']);
        $visitor['email'] = htmlspecialchars($_POST['visitorEmail']);
        $visitor['phoneNumber'] = htmlspecialchars($_POST['visitorPhoneNumber']);
        $visitor['messageContent'] = htmlspecialchars($_POST['contactMessage']);
        $visitor['messageType'] = htmlspecialchars($_POST['questionType']);
        $visitor['idRole'] = 4;
        $dateTime = date('Y-m-d h:i:s');
        //Flash messages 
        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];



        $isSuccess = LibMember::CreateContactMessage($visitor['messageType'], $visitor['idRole'], $visitor['firstName'], $visitor['lastName'], $visitor['email'], $visitor['phoneNumber'],  $visitor['messageContent'], $dateTime);
        // Ajoute un flash-message a garder?
        if ($isSuccess) {
            $_SESSION['msg']['info'][] = 'Votre message a été envoyé.';
        }


        // Redirige vers la page de login
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



$ctrl = new Create();
$ctrl->execute();
