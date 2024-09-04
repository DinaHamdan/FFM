<main>
    <section class="backoffice-option" id="backoffice-volunteerForm-detail">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>

            <div class="backoffice-option-container">
                <p> Le : <?= $args['session']['volunteerForm']['time'] ?></p>
                <p> Par : <?= $args['session']['volunteerForm']['firstName'] ?> <?= $args['session']['contactMessage']['lastName'] ?></p>
                <p> Email: <?= $args['session']['volunteerForm']['email'] ?></p>
                <p>Téléphone : <?= $args['session']['volunteerForm']['phoneNumber'] ?></p>
                <p>date arrivé: <?= $args['session']['volunteerForm']['dateArrival'] ?></p>
                <p>date depart : <?= $args['session']['volunteerForm']['dateDepart'] ?></p>
                <p>Options jours: <?= $args['session']['volunteerForm']['dayOptions'] ?></p>
                <p>Options temps: <?= $args['session']['volunteerForm']['timeOptions'] ?></p>

                <p>workOptions: <?= $args['session']['volunteerForm']['workOptions'] ?></p>
                <p>extraWorkInfo: <?= $args['session']['volunteerForm']['extraWorkInfo'] ?></p>
                <p>diplomePSC1: <?= $args['session']['volunteerForm']['diplomePSC1'] ?></p>
                <p>transport: <?= $args['session']['volunteerForm']['transport'] ?></p>
                <p>lodging: <?= $args['session']['volunteerForm']['lodging'] ?></p>
                <p>performance: <?= $args['session']['volunteerForm']['performance'] ?></p>
                <p>foodRestrictions: <?= $args['session']['volunteerForm']['foodRestrictions'] ?></p>
                <p>otherInfo: <?= $args['session']['volunteerForm']['otherInfo'] ?></p>

            </div>

        </div>

    </section>
</main>