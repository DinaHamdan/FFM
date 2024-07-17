<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire From Mars</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title><?= $args['pageTitle'] ?></title>

</head>

<body>
    <header>
        <img id="logo-2" src="/img/FFM-logo-300x205.png" alt="Fire-from-Mars-Logo">
        <img id="logo3" class="hamburger" src="/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo"></li>

        <nav id="menuBar">
            <ul class="menu">
                <?php
                /* Check if user session is not null to show the forum */
                if ($args['session']['user'] != null) { ?>
                    <li><a class="menuItem" href='/ctrl/welcome.php'>FFM</a></li>
                    <li><a class="menuItem" href="">Artistes</a></li>
                    <li><a class="menuItem" href="">Evènements</a></li>
                    <li><a class="menuItem" href='/ctrl/contact/contact-display.php'>Contact</a></li>
                    <li><a class="menuItem" href='/ctrl/login/login-display.php'>Login</a></li>
                    <li><a class="menuItem" href='/ctrl/forum/forum-display.php'>Forum</a></li>
                    <!-- Check if the user is an admin -->
                    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
                        <li><a class="menuItem" href="/ctrl/registration/registration-display.php">Inscription</a></li>
                    <?php  } ?>
                    <div>
                        <li><a href="/ctrl/profile/profile-display.php"><img id="ffm-man" src="/img/fire-LOGOFFM-1-223x300.png" alt="Fire-from-Mars-Logo"></a></li>
                        <li><a href='/ctrl/logout.php'>Logout</a></li>
                    </div>
                <?php } else { ?>
                    <li><a class="menuItem" href='/ctrl/welcome.php'>FFM</a></li>
                    <li><a class="menuItem" href="">Artistes</a></li>
                    <li><a class="menuItem" href="">Evènements</a></li>
                    <li><a class="menuItem" href='/ctrl/contact/contact-display.php'>Contact</a></li>
                    <li><a class="menuItem" href='/ctrl/login/login-display.php'>Login</a></li>
                <?php } ?>
            </ul>


        </nav>

    </header>
    <div id="listWarning">
        <?php if (!empty($args['session']['msg']['incorrect'])) { ?>

            <div class="info">

                <?php foreach ($args['session']['msg']['incorrect'] as $inco) { ?>
                    <p><?= $inco ?></p>
                <?php } ?>

            </div>
        <?php } ?>

        <?php if (!empty($args['session']['msg']['unexisting'])) { ?>

            <div class="error">

                <?php foreach ($args['session']['msg']['unexisting'] as $unexisting) { ?>
                    <p><?= $unexisting ?></p>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
    <?php unset($_SESSION['msg']) ?>

    </div>
    <h1><?= $args['pageTitle'] ?></h1>