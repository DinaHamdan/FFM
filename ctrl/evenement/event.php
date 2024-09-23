<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/event.php';


class EventDisplay extends Ctrl
{
    function do(): void
    {
        $isLogged = $this->isUserLogged();
        $isGranted = $this->hasRole(Role::ADMIN);
        if ($isGranted) {
            $_SESSION['user']['codeRole'] == "ADM";
        } else {
            $_SESSION['user']['codeRole'] = [];
        }

        $conventionInfo = LibEvent::getEvent();
        $_SESSION['convention'] = $conventionInfo;
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/evenement/event.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
    }
    function getPageTitle(): null
    {
        return null;
        /*         return 'Jongle En Zik';
 */
    }
}

$ctrl = new EventDisplay();
$ctrl->execute();
