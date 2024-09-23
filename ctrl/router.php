<?php

// Read the path of the requested URL 
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

// Reference all routes of the application
$routes = [];

// homepage
$routes['/'] = '/ctrl/welcome.php';

//logout
$routes['/logout'] = '/ctrl/logout.php';

// adhesion
$routes['/adhesion/adhesion-display'] = '/ctrl/adhesion/adhesion-display.php';
$routes['/adhesion/adhesion'] = '/ctrl/adhesion/adhesion.php';

// props
$routes['/agre/add-agre-display'] = '/ctrl/agre/add-agre-display.php';
$routes['/agre/add-agre'] = '/ctrl/agre/add-agre.php';
$routes['/agre/add-agreType-display'] = '/ctrl/agre/add-agreType-display.php';
$routes['/agre/add-agreType'] = '/ctrl/agre/add-agreType.php';
$routes['/agre/list-agre'] = '/ctrl/agre/list-agre.php';
$routes['/agre/mainAgrePhoto'] = '/ctrl/agre/mainAgrePhoto.php';
$routes['/agre/remove-agrePhoto'] = '/ctrl/agre/remove-agrePhoto.php';
$routes['/agre/agrePhotoFire-display'] = '/ctrl/agre/agrePhotoFire-display';
$routes['/agre/agrePhotoLED-display'] = '/ctrl/agre/agrePhotoLED-display';

// backoffice
$routes['/backoffice/backoffice'] = '/ctrl/backoffice/backoffice.php';
$routes['/backoffice/adhesion'] = '/ctrl/backoffice/adhesion.php';
$routes['/backoffice/adhesion-detail'] = '/ctrl/backoffice/adhesion-detail.php';
$routes['/backoffice/contactMessage'] = '/ctrl/backoffice/contactMessage.php';
$routes['/backoffice/contactMessage-detail'] = '/ctrl/backoffice/contactMessage-detail.php';
$routes['/backoffice/list-member'] = '/ctrl/backoffice/list-members.php';
$routes['/backoffice/delete-member'] = '/ctrl/backoffice/delete-member.php';
$routes['/backoffice/list-photo-agre'] = '/ctrl/backoffice/list-photo-agre.php';
$routes['/backoffice/volunteer-form'] = '/ctrl/backoffice/volunteer-form.php';
$routes['/backoffice/volunteer-form-detail'] = '/ctrl/backoffice/volunteer-form-detail.php';


// contact 

$routes['/contact/contact-display'] = '/ctrl/contact/contact-display.php';
$routes['/contact/contact'] = '/ctrl/contact/contact.php';

//Event
$routes['/evenement/event'] = '/ctrl/evenement/event.php';
$routes['/evenement/update-event-display'] = '/ctrl/evenement/update-event-displays.php';
$routes['/evenement/update-event'] = '/ctrl/evenement/update-event.php';
$routes['/evenement/volunteer-form-display'] = '/ctrl/evenement/volunteer-form-display.php';
$routes['/evenement/volunteer'] = '/ctrl/evenement/volunteer.php';

//forum 
$routes['/forum/forum-display'] = '/ctrl/forum/forum-display.php';
$routes['/forum/discussion-detail'] = '/ctrl/forum/discussion-detail.php';
$routes['/forum/create-discussion'] = '/ctrl/forum/create-discussion.php';
$routes['/forum/create-comment'] = '/ctrl/forum/create-comment.php';
$routes['/forum/delete-discussion'] = '/ctrl/forum/delete-discussion.php';
$routes['/forum/delete-comment'] = '/ctrl/forum/delete-comment.php';


//login
$routes['/login/login-display'] = '/ctrl/login/login-display.php';
$routes['/login/login'] = '/ctrl/login/login.php';

//profile
$routes['/profile/create-profile'] = '/ctrl/profile/create-profile.php';
$routes['/profile/profile-display'] = '/ctrl/profile/profile-display.php';
$routes['/profile/update-pass-display'] = '/ctrl/profile/update-pass-display.php';
$routes['/profile/update-pass'] = '/ctrl/profile/update-pass.php';

//registration
$routes['/registration/registration-display'] = '/ctrl/registration/registration-display.php';
$routes['/registration/registration'] = '/ctrl/registration/v.php';

// search for requested route
$route = $routes[$url];

// Eventually redirect the user towards a personnalized error 404 page
// when the requested route is not referenced  
// WARN ça manque de log... ?
if (!isset($route)) {

    $target = $_SERVER['DOCUMENT_ROOT'] . '/view/_error/404.php';
    include($target);
    exit();
}

// Interpret/execute the code of the targeted controler  
$target = $_SERVER['DOCUMENT_ROOT'] . $route;
include($target);
