<main>
    <section class="backoffice-option" id="backoffice-volunteerForm-detail">
        <h1 id="page-title"><?= $args['pageTitle'] ?> </h1>
        <h2 class="participant-name"> <?= $args['volunteerForm']['firstName'] ?> <?= $args['volunteerForm']['lastName'] ?> </h2>
        <div>

            <div class="backoffice-option-container">
                <p> <span> Prénom : </span> <?= $args['volunteerForm']['firstName'] ?></p>
                <p> <span> Nom : </span> <?= $args['volunteerForm']['lastName'] ?></p>

                <p> <span> Date de naissance : </span><?= $args['volunteerForm']['birthday'] ?></p>

                <p> <span> Email: </span><?= $args['volunteerForm']['email'] ?></p>
                <p><span> Téléphone :</span> <?= $args['volunteerForm']['phoneNumber'] ?></p>
                <p><span> Date d'arrivé: </span><?= $args['volunteerForm']['dateArrival'] ?></p>
                <p><span> Date de depart : </span><?= $args['volunteerForm']['dateDepart'] ?></p>
                <p><span> Options jours: </span> <?= $args['volunteerForm']['dayOptions'] ?></p>
                <p> <span> Options temps: </span><?= $args['volunteerForm']['timeOptions'] ?></p>

                <p><span> Options de travail choisis : </span> <?= $args['volunteerForm']['workOptions'] ?></p>
                <p><span> Informations supplémentaires sur le travail : </span> <?= $args['volunteerForm']['extraWorkInfo'] ?></p>
                <p><span> Diplôme PSC1 : </span><?= $args['volunteerForm']['diplomePSC1'] ?></p>
                <p> <span> Transport : </span> <?= $args['volunteerForm']['transport'] ?></p>
                <p> <span> Autre transport : </span> <?= $args['volunteerForm']['otherTransport'] ?></p>
                <p> <span> Logement : </span> <?= $args['volunteerForm']['lodging'] ?></p>
                <p> <span> Participation performance : </span><?= $args['volunteerForm']['performance'] ?></p>
                <p><span> Resctrictions de nourriture : </span> <?= $args['volunteerForm']['foodRestrictions'] ?></p>
                <p> <span> Autres informations : </span> <?= $args['volunteerForm']['otherInfo'] ?></p>
                <p> <span> Candidature envoyé le : </span> <?= $args['volunteerForm']['time'] ?></p>

            </div>

        </div>

    </section>