<main>
    <section class="backoffice-option" id="backoffice-adhesion">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['listAdhesion'] as $adhesion) { ?>
                <div class="backoffice-option-container">
                    <p> <span> Prénom : </span> <?= $adhesion['firstName'] ?></p>
                    <p> <span> Nom : </span> <?= $adhesion['lastName'] ?></p>
                    <p> <span> Email :</span> <?= $adhesion['email'] ?></p>
                    <p><span> Téléphone :</span> <?= $adhesion['phoneNumber'] ?></p>
                    <p><span> Type d'agrès pratiqués :</span> <?= $adhesion['typeAgre'] ?> </p>
                    <p><span> Autre talents : </span> <?= $adhesion['talents'] ?></p>
                    <p> <span> Authorization à l'image :</span> <?= $adhesion['authorization'] ?></p>

                    <p> <span> Le :</span> <?= $adhesion['time'] ?></p>

                    <a target="_blank" href="/ctrl/backoffice/adhesion-detail.php?id=<?= ($adhesion['id']) ?>">Voir Détails</a>

                </div>
            <?php } ?>

        </div>

    </section>