<main>
    <section class="backoffice-option" id="backoffice-adhesion-detail">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <h2 class="participant-name"> <?= $args['adhesion']['firstName'] ?> <?= $args['adhesion']['lastName'] ?> </h2>


        <div class="backoffice-option-container">
            <p> <span> Prénom : </span> <?= $args['adhesion']['firstName'] ?></p>
            <p> <span> Nom : </span> <?= $args['adhesion']['lastName'] ?></p>
            <p> <span> Email :</span> <?= $args['adhesion']['email'] ?></p>
            <p><span> Téléphone :</span> <?= $args['adhesion']['phoneNumber'] ?></p>
            <p><span> Type d'agrès pratiqués :</span> <?= $args['adhesion']['typeAgre'] ?> </p>
            <p><span> Autre talents : </span> <?= $args['adhesion']['talents'] ?></p>
            <p> <span> Authorization à l'image :</span> <?= $args['adhesion']['authorization'] ?></p>
            <p> <span> Le :</span> <?= $args['adhesion']['time'] ?></p>

        </div>



    </section>