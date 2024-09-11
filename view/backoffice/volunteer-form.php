<main>
    <section class="backoffice-option" id="backoffice-volunteerForm">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <?php foreach ($args['session']['listVolunteerForm'] as $args['session']['volunteerForm']) { ?>
                <div class="backoffice-option-container">
                    <p> <span> Prénom : </span> <?= $args['session']['volunteerForm']['firstName'] ?> <span> Nom : </span><?= $args['session']['volunteerForm']['lastName'] ?></p>
                    <p> <span> Email : </span> <?= $args['session']['volunteerForm']['email'] ?></p>
                    <p> <span> Téléphone : </span><?= $args['session']['volunteerForm']['phoneNumber'] ?></p>
                    <p> <span> Date: </span> <?= $args['session']['volunteerForm']['time'] ?></p>

                    <a href="/ctrl/backoffice/volunteer-form-detail.php?id=<?= ($args['session']['volunteerForm']['idVolunteer']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>
</main>