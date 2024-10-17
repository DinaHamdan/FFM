<main>
    <section class="backoffice-option">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listContactMessage'] as $args['session']['contactMessage']) { ?>
                <div class="backoffice-option-container">
                    <h4> <span>Message de : </span> <?= $args['session']['contactMessage']['firstName'] ?> <?= $args['session']['contactMessage']['lastName'] ?></h4>
                    <p><span>Email : </span><a href="mailto:<?= $args['session']['contactMessage']['email'] ?> "><?= $args['session']['contactMessage']['email'] ?></a>
                    </p>
                    <p> <span>Téléphone : </span> <a href="tel:<?= $args['session']['contactMessage']['phoneNumber'] ?>"><?= $args['session']['contactMessage']['phoneNumber'] ?></a>
                    </p>
                    <p> <span>Type de demande : </span><?= $args['session']['contactMessage']['type'] ?></p>
                    <div class="contact-message">
                        <p><span> Message : </span><?= $args['session']['contactMessage']['content'] ?></p>
                    </div>
                    <p> <span>Le : </span> <?= $args['session']['contactMessage']['time'] ?></p>

                    <a target="_blank" href="/ctrl/backoffice/contactMessage-detail.php?id=<?= ($args['session']['contactMessage']['id']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>