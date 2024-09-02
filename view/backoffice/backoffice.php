<main>
    <h1 id="page-title"><?= $args['pageTitle'] ?></h1>
    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
        <a href="/ctrl/backoffice/contactMessage.php">Messages de contact</a><br>
        <a href="/ctrl/backoffice/adhesion.php">Formulaires Adhésion</a><br>
        <a href="/ctrl/backoffice/volunteer-form.php">Formulaires bénévoles</a><br>
        <a href="/ctrl/backoffice/list-members.php">Membres actifs</a><br>
        <a href="/ctrl/backoffice/list-photo-agre.php">Gallerie photos agrés</a><br>



    <?php  } ?>
</main>