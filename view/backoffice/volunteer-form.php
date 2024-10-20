<main>
    <section class="backoffice-option">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div id="backoffice-volunteerForm">

            <?php foreach ($args['listVolunteerForm'] as $volunteerForm) { ?>
                <div class="backoffice-option-container">
                    <p> <span> Prénom : </span> <?= $volunteerForm['firstName'] ?></p>
                    <p> <span> Nom : </span> <?= $volunteerForm['lastName'] ?></p>
                    <p> <span> Email : </span> <?= $volunteerForm['email'] ?></p>
                    <p> <span> Téléphone : </span><?= $volunteerForm['phoneNumber'] ?></p>
                    <p> <span> Candidature envoyé le :</span> <?= $volunteerForm['time'] ?></p>

                    <a target="_blank" href="/ctrl/backoffice/volunteer-form-detail.php?id=<?= ($volunteerForm['idVolunteer']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>

    </section>