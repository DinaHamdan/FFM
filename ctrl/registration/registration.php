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

        //Gather data entered by admin
        $user = [];
        $user['email'] = htmlspecialchars($_POST['email']);
        $user['passClear'] = htmlspecialchars($_POST['pass']);
        $user['idRole'] = 3;

        //limit number of characters verify its not over 500 - 

        $password = password_hash($user['passClear'], PASSWORD_BCRYPT);
        $user['passHash'] = $password;

        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];



        $isSuccess = LibUser::createMember($user['email'], $user['passHash'], $user['passClear'], $user['idRole']);
        // Ajoute un flash-message a garder?
        if ($isSuccess) {
            $_SESSION['msg']['info'][] = 'Your profile has been created successfully.';
        }


        // Redirige vers la page de login
        header('Location: ' . '/ctrl/login/login-display.php');
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
