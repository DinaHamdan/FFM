<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/CtrlI.php';

abstract class Ctrl implements CtrlI

{
    protected array $viewArgs = [];

    /**
     * executes the treatment specific to the child controler 
     */
    protected abstract function do(): void;

    public function execute(): void
    {
        session_start();
        $this->do();

        $this->viewArgs['pageTitle'] = $this->getPageTitle();
        $this->viewArgs['session'] = $_SESSION;

        $this->renderView();
    }

    public function isUserLogged(): bool
    {

        return isset($_SESSION['user']) && $_SESSION['user']  != null;
    }
    public function hasRole(string $role)
    {
        return $this->isUserLogged() && $_SESSION['user']['codeRole'] == $role;
    }
}
