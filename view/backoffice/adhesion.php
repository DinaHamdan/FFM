<main>
    <section id="backoffice-adhesion">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listAdhesion'] as $args['session']['adhesion']) { ?>
                <div>
                    <p> Par : <?= $args['session']['adhesion']['firstName'] ?> <?= $args['session']['adhesion']['lastName'] ?></p>
                    <p> Email: <?= $args['session']['adhesion']['email'] ?></p>
                    <p>Téléphone : <?= $args['session']['adhesion']['phoneNumber'] ?></p>
                    <p> Type de message : <?= $args['session']['adhesion']['typeAgre'] ?> </p>
                    <p> Contenu : <?= $args['session']['adhesion']['talents'] ?></p>
                    <p> Contenu : <?= $args['session']['adhesion']['authorization'] ?></p>

                    <p> Le : <?= $args['session']['adhesion']['time'] ?></p>

                    <a href="/ctrl/backoffice/adhesion-detail.php?id=<?= ($args['session']['adhesion']['id']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>
</main>