
<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/member.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';


class Login extends Ctrl
{
    function do(): void
    {

        // Read login info entered by user
        $userInfo = [];
        //To protect from injections
        $userInfo['email'] = htmlspecialchars($_POST['email']);
        $userInfo['pass'] = htmlspecialchars($_POST['pass']);
        $password = $userInfo['pass'];

        // List all user components using their email as id
        $user = LibMember::getMember($userInfo['email']);
        // var_dump($user);
        if ($user != null) {

            if (password_verify($password, $user['pass'])) {
                $_SESSION['user'] = $user;
                header('Location: ' . '/forum/forum-display');
                exit;
            } else {
                $_SESSION['msg']['incorrect'] = [];
                $_SESSION['msg']['incorrect'][]  = 'Identifiant incorrecte';
                header('Location: ' .  '/login/login-display');
                exit;
            };
        } else {

            $_SESSION['msg']['unexisting'] = [];
            $_SESSION['msg']['unexisting'][] = 'Le compte utilisateur est introuvable.';

            header('Location: ' .  '/login/login-display');
            exit;
        };
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
// constuctor 
$ctrl = new Login();
$ctrl->execute();
