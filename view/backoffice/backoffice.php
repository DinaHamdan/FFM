<main>
    <h1 id="page-title"><?= $args['pageTitle'] ?></h1>
    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
        <a href="/ctrl/backoffice/contactMessage.php">Messages de contact</a>
        <a href="/ctrl/backoffice/adhesion.php">Formulaires Adhésion</a>

    <?php  } ?>
</main>