<main>
    <h1 id="page-title"><?= $args['pageTitle'] ?></h1>
    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
        <a href="/ctrl/backoffice/contactMessage.php">Messages de contact</a><br>
        <a href="/ctrl/backoffice/adhesion.php">Formulaires Adhésion</a><br>
        <a href="/ctrl/backoffice/volunteer-form.php">Formulaires bénévoles</a><br>


    <?php  } ?>
</main>