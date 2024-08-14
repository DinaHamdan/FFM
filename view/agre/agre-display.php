<main>
    <div> <a href="/ctrl/agre/add-agre-display.php">Ajouter des photos d'agrés</a>
    </div>
    <a href="/ctrl/agre/add-agreType-display.php">Ajouter type d'agrés</a>

    <h2 id="fire-prop-title"> Agrès Feu</h2>
    <?php
    foreach ($args['session']['typeAgreFeu'] as $args['session']['agreFeu']) { ?>

        <div>


            <h3><?= $args['session']['agreFeu']['agreName'] ?></h3>
            <a href="/ctrl/agre/agrePhotoFire-display.php?id=<?= $args['session']['agreFeu']['idAgre'] ?>" "> <img src=" data:image/png;base64,<?= base64_encode($args['session']['agreFeu']['illustration']) ?>" alt="">la </a>
        </div>
    <?php } ?>
    <h2>Agrès LED</h2>
    <?php
    foreach ($args['session']['typeAgreLED'] as $args['session']['agreLED']) { ?>

        <div>


            <h3><?= $args['session']['agreLED']['agreName'] ?></h3>
            <a href=" /ctrl/agre/agrePhotoLED-display.php?id=<?= $args['session']['agreLED']['idAgre'] ?>" "> <img src=" data:image/png;base64,<?= base64_encode($args['session']['agreLED']['illustration']) ?>" alt="">la </a>
        </div>
    <?php } ?>
</main>