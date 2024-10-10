<main>
    <section class="backoffice-option" id="backoffice-volunteerForm-detail">
        <h1 id="page-title"><?= $args['pageTitle'] ?> </h1>
        <h2 class="participant-name"> <?= $args['session']['volunteerForm']['firstName'] ?> <?= $args['session']['volunteerForm']['lastName'] ?> </h2>
        <div>

            <div class="backoffice-option-container">
                <p> <span> Prénom : </span> <?= $args['session']['volunteerForm']['firstName'] ?></p>
                <p> <span> Nom : </span> <?= $args['session']['volunteerForm']['lastName'] ?></p>

                <p> <span> Date de naissance : </span><?= $args['session']['volunteerForm']['birthday'] ?></p>

                <p> <span> Email: </span><?= $args['session']['volunteerForm']['email'] ?></p>
                <p><span> Téléphone :</span> <?= $args['session']['volunteerForm']['phoneNumber'] ?></p>
                <p><span> Date d'arrivé: </span><?= $args['session']['volunteerForm']['dateArrival'] ?></p>
                <p><span> Date de depart : </span><?= $args['session']['volunteerForm']['dateDepart'] ?></p>
                <p><span> Options jours: </span> <?= $args['session']['volunteerForm']['dayOptions'] ?></p>
                <p> <span> Options temps: </span><?= $args['session']['volunteerForm']['timeOptions'] ?></p>

                <p><span> Options de travail choisis : </span> <?= $args['session']['volunteerForm']['workOptions'] ?></p>
                <p><span> Informations supplémentaires sur le travail : </span> <?= $args['session']['volunteerForm']['extraWorkInfo'] ?></p>
                <p><span> Diplôme PSC1 : </span><?= $args['session']['volunteerForm']['diplomePSC1'] ?></p>
                <p> <span> Transport : </span> <?= $args['session']['volunteerForm']['transport'] ?></p>
                <p> <span> Autre transport : </span> <?= $args['session']['volunteerForm']['otherTransport'] ?></p>
                <p> <span> Logement : </span> <?= $args['session']['volunteerForm']['lodging'] ?></p>
                <p> <span> Participation performance : </span><?= $args['session']['volunteerForm']['performance'] ?></p>
                <p><span> Resctrictions de nourriture : </span> <?= $args['session']['volunteerForm']['foodRestrictions'] ?></p>
                <p> <span> Autres informations : </span> <?= $args['session']['volunteerForm']['otherInfo'] ?></p>
                <p> <span> Candidature envoyé le : </span> <?= $args['session']['volunteerForm']['time'] ?></p>

            </div>

        </div>

    </section>