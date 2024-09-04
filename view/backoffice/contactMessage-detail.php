<main>
    <section id="contact-message-detail">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>


        <div id="contactMessage-detail-container">

            <div>
                <h2> Type de message : <?= $args['session']['contactMessage']['type'] ?> </h2>
                <p> Le : <?= $args['session']['contactMessage']['time'] ?></p>
                <p> Par : <?= $args['session']['contactMessage']['firstName'] ?> <?= $args['session']['contactMessage']['lastName'] ?></p>
                <p> Email: <?= $args['session']['contactMessage']['email'] ?></p>
                <p>Téléphone : <?= $args['session']['contactMessage']['phoneNumber'] ?></p>
                <p> Contenu : <?= $args['session']['contactMessage']['content'] ?></p>
            </div>


    </section>
</main>