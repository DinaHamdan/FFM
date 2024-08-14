<main>
    <section id="convention">
        <h1 id="convention-first-title"> Jongle En Zik</h1>
        <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
            <a href="/ctrl/evenement/update-event-display.php">Modifier l'évenement</a>
        <?php  } ?>

        <div id="convention-poster-container">

            <img src=" data:image/png;base64,<?= base64_encode($args['session']['convention']['poster']) ?>" alt="photo-poster">
            <img src=" data:image/png;base64,<?= base64_encode($args['session']['convention']['programPhoto']) ?>" alt="photo-program">
        </div>
        <h2 id="convention-title">Programme </h2>
        <div id="convention-content">
            <h4><?= $args['session']['convention']['cost'] ?></h4>
            <h3><?= $args['session']['convention']['firstDate'] ?></h3>
            <p> <?= $args['session']['convention']['firstDateContent'] ?></p>
            <h3><?= $args['session']['convention']['secondDate'] ?></h3>

            <p>
                <?= $args['session']['convention']['secondDateContent'] ?></p>
            <h3><?= $args['session']['convention']['thirdDate'] ?></h3>

            <p <?= $args['session']['convention']['thirdDateContent'] ?></p>



            <p> <?= $args['session']['convention']['description'] ?></p>

            <div>
                <a href="">Réserver ma place</a>
                <a href="/ctrl/evenement/volunteer-form-display.php">Devenir Bénévole</a>
            </div>
        </div>
        <div id="convention-map-container">
            <p> <?= $args['session']['convention']['address'] ?></p>
            <a href="">Lien de google maps</a>
        </div>
        </div>

    </section>
</main>