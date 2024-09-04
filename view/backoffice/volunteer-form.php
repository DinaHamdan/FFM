<main>
    <section class="backoffice-option" id="backoffice-volunteerForm">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listVolunteerForm'] as $args['session']['volunteerForm']) { ?>
                <div class="backoffice-option-container">
                    <p> Le : <?= $args['session']['volunteerForm']['time'] ?></p>
                    <p> Par : <?= $args['session']['volunteerForm']['firstName'] ?> <?= $args['session']['volunteerForm']['lastName'] ?></p>
                    <p> Email: <?= $args['session']['volunteerForm']['email'] ?></p>
                    <p>Téléphone : <?= $args['session']['volunteerForm']['phoneNumber'] ?></p>
                    <a href="/ctrl/backoffice/volunteer-form-detail.php?id=<?= ($args['session']['volunteerForm']['idVolunteer']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>
</main>