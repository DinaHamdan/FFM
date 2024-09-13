<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire From Mars</title>
    <link rel="stylesheet" href="/asset/css/styles.css">
    <meta name="google-site-verification" content="jZ3Hv3d-HTEMSZ2l86UmtZihHftr4Z59937gEqtjEsk" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--     <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 -->
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap ?family=Inconsolata:wght@200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?= $args['pageTitle'] ?></title>

</head>

<body>
    <header>
        <img id="full-logo-small" src="/asset/img/FFM-logo-300x205.png" alt="Fire-from-Mars-Logo">
        <img id="logo" class="hamburger" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo">
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
            <ul class="menu">
                <?php
                /* Check if user session is not null to show the specific links */
                if ($args['session']['user']['codeRole'] != null) { ?>
                    <li><a class="menuItem" href='/ctrl/welcome.php'>FFM</a></li>
                    <li><a class="menuItem" href='/ctrl/agre/list-agre.php'>Agrès</a></li>
                    <li><a class="menuItem" href='/ctrl/evenement/event.php'>Evénement</a></li>
                    <li><a class="menuItem" href='/ctrl/contact/contact-display.php'>Contact</a></li>
                    <li><a class="menuItem" href='/ctrl/forum/forum-display.php'>Forum</a></li>
                    <!-- Check if the user is an admin -->
                    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
                        <li><a class="menuItem" href="/ctrl/registration/registration-display.php">Inscription</a></li>
                        <li><a class="menuItem" href="/ctrl/backoffice/backoffice.php">BackOffice</a></li>

                    <?php  } ?>
                    <div id="avatar-container">
                        <?php if ($args['session']['user']['avatar'] == null) { ?>
                            <a href="/ctrl/profile/profile-display.php"><img id="ffm-man" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo"></a>

                        <?php } else {  ?>
                            <a href="/ctrl/profile/profile-display.php"><img id="ffm-man" src="data:image/png;base64,<?= base64_encode($args['session']['user']['avatar']) ?>" alt=""></a>
                        <?php } ?>
                        <a class="logout" href='/ctrl/logout.php'>Logout</a>
                    </div>
                <?php } else { ?>
                    <li><a class="menuItem" href='/ctrl/welcome.php'>FFM</a></li>
                    <li><a class="menuItem" href='/ctrl/agre/list-agre.php'>Agrès</a></li>
                    <li><a class="menuItem" href='/ctrl/evenement/event.php'>Evénement</a></li>
                    <li><a class="menuItem" href='/ctrl/contact/contact-display.php'>Contact</a></li>
                    <li><a class="menuItem" href='/ctrl/login/login-display.php'>Login</a></li>
                <?php } ?>
            </ul>



        </nav>


    </header>

    <!--     <h1 id="page-title"><?= $args['pageTitle'] ?></h1> -->