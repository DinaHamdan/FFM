<main>
    <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
        <a href="/ctrl/evenement/update-event-display.php">Modifier l'évenement</a>
    <?php  } ?>

    <div id="poster-container">
        <img src="" alt="">
    </div>


    <div>
        <h2>Programme </h2>

        <div>
            <img src=" data:image/png;base64,<?= base64_encode($args['session']['convention']['poster']) ?>" alt="photo-poster">
            <img src=" data:image/png;base64,<?= base64_encode($args['session']['convention']['programPhoto']) ?>" alt="photo-program">

            <h4><?= $args['session']['convention']['cost'] ?></h4>
            <h3><?= $args['session']['convention']['firstDate'] ?></h3>
            <p> <?= $args['session']['convention']['firstDateContent'] ?></p>
            <h3><?= $args['session']['convention']['secondDate'] ?></h3>

            <p>
                <?= $args['session']['convention']['secondDateContent'] ?></p>
            <h3><?= $args['session']['convention']['thirdDate'] ?></h3>

            <p <?= $args['session']['convention']['thirdDateContent'] ?></p>

        </div>

        <p> <?= $args['session']['convention']['description'] ?></p>

        <div>
            <a href="">Réserver ma place</a>
            <a href="/ctrl/evenement/volunteer-display.php">Devenir Bénévole</a>
        </div>

        <div>
            <?= $args['session']['convention']['address'] ?>
            <a href="">Lien de google maps</a>
        </div>
    </div>


</main>