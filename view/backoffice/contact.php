<main>
    <section class="backoffice-option">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['listContactMessage'] as $contactMessage) { ?>
                <div class="backoffice-option-container">
                    <h4> <span>Message de : </span> <?= $contactMessage['firstName'] ?> <?= $contactMessage['lastName'] ?></h4>
                    <p><span>Email : </span><a href="mailto:<?= $contactMessage['email'] ?> "><?= $contactMessage['email'] ?></a>
                    </p>
                    <p> <span>Téléphone : </span> <a href="tel:<?= $contactMessage['phoneNumber'] ?>"><?= $contactMessage['phoneNumber'] ?></a>
                    </p>
                    <p> <span>Type de demande : </span><?= $contactMessage['type'] ?></p>
                    <div class="contact-message">
                        <p><span> Message : </span><?= $contactMessage['content'] ?></p>
                    </div>
                    <p> <span>Le : </span> <?= $contactMessage['time'] ?></p>

                    <a target="_blank" href="/ctrl/backoffice/contactMessage-detail.php?id=<?= ($contactMessage['id']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>