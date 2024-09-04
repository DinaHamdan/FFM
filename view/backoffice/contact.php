<main>
    <section class="backoffice-option">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listContactMessage'] as $args['session']['contactMessage']) { ?>
                <div class="backoffice-option-container">
                    <h2> Type de message : <?= $args['session']['contactMessage']['type'] ?> </h2>
                    <p> Le : <?= $args['session']['contactMessage']['time'] ?></p>
                    <p> Par : <?= $args['session']['contactMessage']['firstName'] ?> <?= $args['session']['contactMessage']['lastName'] ?></p>
                    <p> Email: <?= $args['session']['contactMessage']['email'] ?></p>
                    <p>Téléphone : <?= $args['session']['contactMessage']['phoneNumber'] ?></p>
                    <p> Message : <?= $args['session']['contactMessage']['content'] ?></p>
                    <a href="/ctrl/backoffice/contactMessage-detail.php?id=<?= ($args['session']['contactMessage']['id']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>
</main>