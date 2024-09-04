<?php


//establish a connection to database and libray of functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';




class UpdatePass extends Ctrl
{
    function do(): void
    {
        //Check if user is logged 
        $isLogged = $this->isUserLogged();

        //Gather data entered by admin
        $userInfo = [];
        $userInfo['passClear'] = htmlspecialchars($_POST['pass']);
        //limit number of characters verify its not over 500 - 

        $password = password_hash($userInfo['passClear'], PASSWORD_BCRYPT);
        $userInfo['passHash'] = $password;

        $memberId = $_SESSION['user']['id'];


        $_SESSION['msg']['info'] = [];
        $_SESSION['msg']['error'] = [];


        $isSuccess = LibMember::updatePassword($memberId, $userInfo['passHash'], $userInfo['passClear']);
        //Add a flash message
        if ($isSuccess) {
            $_SESSION['msg']['info'][] = 'Votre mot de passe a été modifié';
        }


        // Redirect towards login
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



$ctrl = new UpdatePass();
$ctrl->execute();
