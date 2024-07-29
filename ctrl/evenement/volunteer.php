<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';

class GetVolunteerForm extends Ctrl
{
    function do(): void
    {
        $volunteerForm = [];
        $volunteerForm['firstName'] = htmlspecialchars($_POST['firstName']);
        $volunteerForm['lastName'] = htmlspecialchars($_POST['lastName']);
        $volunteerForm['birthday'] = htmlspecialchars($_POST['birthday']);
        $volunteerForm['phoneNumber'] = htmlspecialchars($_POST['phoneNumber']);
        $volunteerForm['email'] = htmlspecialchars($_POST['email']);
        $volunteerForm['dateArrival'] = htmlspecialchars($_POST['dateArrival']);
        $volunteerForm['volunteerDeparture'] = htmlspecialchars($_POST['volunteerDeparture']);

        $volunteerForm['dayOptions'] = htmlspecialchars($_POST['dayOptions[]']);

        $volunteerForm['timeOptions'] = htmlspecialchars($_POST['timeOptions[]']);

        $volunteerForm['workOptions'] = htmlspecialchars($_POST['workOptions[]']);

        $volunteerForm['extraWorkInfo'] = htmlspecialchars($_POST['extraWorkInfo']);

        $volunteerForm['transport'] = htmlspecialchars($_POST['transport']);

        $volunteerForm['show'] = htmlspecialchars($_POST['show[]']);

        $volunteerForm['foodRestrictions'] = htmlspecialchars($_POST['foodRestrictions']);
        $volunteerForm['foodRestrictions'] = htmlspecialchars($_POST['foodRestrictions']);
    }
    function renderView(): void
    {
        $args = $this->viewArgs;

        header('Location: ' . '/ctrl/evenement/event-display.php');
    }
    function getPageTitle(): null
    {
        return null;
    }
}

$ctrl = new GetVolunteerForm();
$ctrl->execute();
