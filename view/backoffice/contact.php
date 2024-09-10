<main>
    <section class="backoffice-option">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listContactMessage'] as $args['session']['contactMessage']) { ?>
                <div class="backoffice-option-container">
                    <h4> Message de : <?= $args['session']['contactMessage']['firstName'] ?> <?= $args['session']['contactMessage']['lastName'] ?></h4>
                    <p>Email <a href="mailto:<?= $args['session']['contactMessage']['email'] ?> "><?= $args['session']['contactMessage']['email'] ?></a>
                    </p>
                    <p>Téléphone : <a href="tel:<?= $args['session']['contactMessage']['phoneNumber'] ?>"><?= $args['session']['contactMessage']['phoneNumber'] ?></a>
                    </p>
                    <p> Type de message : <?= $args['session']['contactMessage']['type'] ?></p>
                    <div class="contact-message">
                        <p> Message : <?= $args['session']['contactMessage']['content'] ?></p>
                    </div>
                    <p> Le : <?= $args['session']['contactMessage']['time'] ?></p>

                    <!--                     <a href="/ctrl/backoffice/contactMessage-detail.php?id=<?= ($args['session']['contactMessage']['id']) ?>">Voir Détails</a>
 -->
                </div>
            <?php } ?>

        </div>

    </section>
</main>