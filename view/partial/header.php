<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="site-web-de-l-association-fire-from-mars">
    <title>Fire From Mars</title>
    <link rel="stylesheet" href="/asset/css/styles.css">
    <meta name="google-site-verification" content="jZ3Hv3d-HTEMSZ2l86UmtZihHftr4Z59937gEqtjEsk">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--     <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 -->
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap?family=Inconsolata:wght@200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v21.0"></script>
    <header>
        <img id="full-logo-small" src="/asset/img/FFM-logo-300x205.png" alt="Fire-from-Mars-Logo">
        <img id="logo" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo">
        <div id="flash-message-header">
            <?php if (!empty($args['session']['msg']['info'])) { ?>


                <?php foreach ($args['session']['msg']['info'] as $info) { ?>
                    <p id="info-message"> <?= $info ?></p>
                <?php } ?>

            <?php } ?>

            <?php if (!empty($args['session']['msg']['error'])) { ?>

                <?php foreach ($args['session']['msg']['error'] as $error) { ?>
                    <p id="error-message"> <?= $error ?> </p>
                <?php } ?>

            <?php } ?>
        </div>

        <?php unset($_SESSION['msg']) ?>
        <nav id="menuBar">
            <ul id="menu">
                <?php
                /* Check if user session is not null to show the specific links */
                if ($args['session']['user']['codeRole'] != null) { ?>
                    <li><a class="menuItem" href='/'>FFM</a></li>
                    <li><a class="menuItem" href='/agre/list-agre'>Agrès</a></li>
                    <li><a class="menuItem" href='/evenement/event'>Evénement</a></li>
                    <li><a class="menuItem" href='/contact/contact-display'>Contact</a></li>
                    <li><a class="menuItem" href='/forum/forum-display'>Forum</a></li>
                    <!-- Check if the user is an admin -->
                    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
                        <li><a class="menuItem" href="/registration/registration-display">Inscription</a></li>
                        <li><a class="menuItem" href="/backoffice/backoffice">BackOffice</a></li>

                    <?php  } ?>
                    <li id="avatar-container">
                        <?php if ($args['session']['user']['avatar'] == null) { ?>
                            <a href="/profile/profile-display"><img id="ffm-man" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo"></a>

                        <?php } else {  ?>
                            <a href="/profile/profile-display"><img id="ffm-man" src="data:image/png;base64,<?= base64_encode($args['session']['user']['avatar']) ?>" alt=""></a>
                        <?php } ?>
                        <a class="logout" href='/ctrl/logout.php'>Logout</a>
                    </li>
                <?php } else { ?>
                    <li><a class="menuItem" href='/'>FFM</a></li>
                    <li><a class="menuItem" href='/agre/list-agre'>Agrès</a></li>
                    <li><a class="menuItem" href='/evenement/event'>Evénement</a></li>
                    <li><a class="menuItem" href='/contact/contact-display'>Contact</a></li>
                    <li><a class="menuItem" href='/login/login-display'>Login</a></li>
                <?php } ?>
            </ul>
            <ul id="menu-mobile">
                <?php
                /* Check if user session is not null to show the specific links */
                if ($args['session']['user']['codeRole'] != null) { ?>
                    <li><a class="menuItem" href='/'>FFM</a></li>
                    <li><a class="menuItem" href='/agre/list-agre'>Agrès</a></li>
                    <li><a class="menuItem" href='/evenement/event'>Evénement</a></li>
                    <li><a class="menuItem" href='/contact/contact-display'>Contact</a></li>
                    <li><a class="menuItem" href='/forum/forum-display'>Forum</a></li>
                    <!-- Check if the user is an admin -->
                    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
                        <li><a class="menuItem" href="/registration/registration-display">Inscription</a></li>
                        <li><a class="menuItem" href="/backoffice/backoffice">BackOffice</a></li>

                    <?php  } ?>
                    <li id="avatar-container">
                        <?php if ($args['session']['user']['avatar'] == null) { ?>
                            <a href="/profile/profile-display"><img id="ffm-man" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo"></a>

                        <?php } else {  ?>
                            <a href="/profile/profile-display"><img id="ffm-man" src="data:image/png;base64,<?= base64_encode($args['session']['user']['avatar']) ?>" alt=""></a>
                        <?php } ?>
                        <a class="logout" href='/ctrl/logout.php'>Logout</a>
                    </li>
                <?php } else { ?>
                    <li><a class="menuItem" href='/'>FFM</a></li>
                    <li><a class="menuItem" href='/agre/list-agre'>Agrès</a></li>
                    <li><a class="menuItem" href='/evenement/event'>Evénement</a></li>
                    <li><a class="menuItem" href='/contact/contact-display'>Contact</a></li>
                    <li><a class="menuItem" href='/login/login-display'>Login</a></li>
                <?php } ?>
            </ul>
        </nav>


    </header>