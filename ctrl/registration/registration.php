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
        //Check if user is logged and has admin privileges
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        if (!$isGranted) {
            header('Location: ' . '/login/login-display');
            exit;
        }
        //Gather data entered by admin
        $user['email'] = htmlspecialchars($_POST['email']);




        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];

        $user = LibMember::getMember($user['email']);

        if ($user != null) {
            $_SESSION['msg']['incorrect'] = [];
            $_SESSION['msg']['incorrect'][]  = 'Le compte existe déjà';
            header('Location: ' . '/registration/registration-display');
            exit;
        } else {
            $user = [];
            //Gather data entered by admin
            $user['email'] = htmlspecialchars($_POST['email']);
            $user['passClear'] = htmlspecialchars($_POST['pass']);
            $user['idRole'] = 3;

            //limit number of characters verify its not over 500 - 
            $password = password_hash($user['passClear'], PASSWORD_BCRYPT);
            $user['passHash'] = $password;
            $isSuccess = LibMember::createMember($user['email'], $user['passHash'], $user['passClear'], $user['idRole']);
            // Ajoute un flash-message a garder?
            if ($isSuccess) {
                $_SESSION['msg']['info'][] = 'Le compte a été crée avec succès.';
            }
        }


        // Redirige vers la page de login
        header('Location: ' . '/login/login-display');
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
