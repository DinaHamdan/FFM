<main>
    <section class="backoffice-option" id="backoffice-adhesion">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listAdhesion'] as $args['session']['adhesion']) { ?>
                <div class="backoffice-option-container">
                    <p> <span> Prénom : </span> <?= $args['session']['adhesion']['firstName'] ?></p>
                    <p> <span> Nom : </span> <?= $args['session']['adhesion']['lastName'] ?></p>
                    <p> <span> Email :</span> <?= $args['session']['adhesion']['email'] ?></p>
                    <p><span> Téléphone :</span> <?= $args['session']['adhesion']['phoneNumber'] ?></p>
                    <p><span> Type d'agrès pratiqués :</span> <?= $args['session']['adhesion']['typeAgre'] ?> </p>
                    <p><span> Autre talents : </span> <?= $args['session']['adhesion']['talents'] ?></p>
                    <p> <span> Authorization à l'image :</span> <?= $args['session']['adhesion']['authorization'] ?></p>

                    <p> <span> Le :</span> <?= $args['session']['adhesion']['time'] ?></p>

                    <a href="/ctrl/backoffice/adhesion-detail.php?id=<?= ($args['session']['adhesion']['id']) ?>">Voir Détails</a>

                </div>
            <?php } ?>

        </div>

    </section>
</main>