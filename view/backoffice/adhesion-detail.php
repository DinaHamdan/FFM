<main>
    <section id="backoffice-adhesion-detail">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>


            <div>
                <p> Par : <?= $args['session']['adhesion']['firstName'] ?> <?= $args['session']['adhesion']['lastName'] ?></p>
                <p> Email: <?= $args['session']['adhesion']['email'] ?></p>
                <p>Téléphone : <?= $args['session']['adhesion']['phoneNumber'] ?></p>
                <p> Type de message : <?= $args['session']['adhesion']['typeAgre'] ?> </p>
                <p> Contenu : <?= $args['session']['adhesion']['talents'] ?></p>
                <p> Contenu : <?= $args['session']['adhesion']['authorization'] ?></p>

                <p> Le : <?= $args['session']['adhesion']['time'] ?></p>

            </div>

        </div>

    </section>
</main>