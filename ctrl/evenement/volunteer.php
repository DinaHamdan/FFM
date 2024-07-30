<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ctrl/ctrl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/event.php';

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
        //Date of arrvial of the volunteer
        $volunteerForm['dateArrival'] = htmlspecialchars($_POST['dateArrival']);
        //Date if depart of volunteer
        $volunteerForm['dateDepart'] = htmlspecialchars($_POST['dateDepart']);

        // 
        foreach ($_POST['dayOptions'] as $dayOption[])
            $volunteerForm['dayOptions'] = implode(',', $dayOption);

        //
        foreach ($_POST['timeOptions'] as $timeOption[])
            $volunteerForm['timeOptions'] = implode(',', $timeOption);
        //
        foreach ($_POST['workOptions'] as $workOption[])
            $volunteerForm['workOptions'] = implode(',', $workOption);

        $volunteerForm['extraWorkInfo'] = htmlspecialchars($_POST['extraWorkInfo']);


        $volunteerForm['diplomePSC1'] = htmlspecialchars($_POST['psc1']);

        $volunteerForm['transport'] = htmlspecialchars($_POST['transport']);
        $volunteerForm['lodging'] = htmlspecialchars($_POST['lodging']);


        foreach ($_POST['show'] as $performance[])
            $volunteerForm['performance'] = implode(',', $performance);

        $volunteerForm['foodRestrictions'] = htmlspecialchars($_POST['foodRestrictions']);
        $volunteerForm['otherInfo'] = htmlspecialchars($_POST['otherInfo']);

        $dateTime = date('Y-m-d h:i:s');

        $isSucces = LibEvent::getVolunteerForm(
            $volunteerForm['firstName'],
            $volunteerForm['lastName'],
            $volunteerForm['birthday'],
            $volunteerForm['phoneNumber'],
            $volunteerForm['email'],
            $volunteerForm['dateArrival'],
            $volunteerForm['dateDepart'],
            $volunteerForm['dayOptions'],
            $volunteerForm['timeOptions'],
            $volunteerForm['workOptions'],
            $volunteerForm['extraWorkInfo'],
            $volunteerForm['diplomePSC1'],
            $volunteerForm['transport'],
            $volunteerForm['lodging'],
            $volunteerForm['performance'],
            $volunteerForm['foodRestrictions'],
            $volunteerForm['otherInfo'],
            $dateTime
        );
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
