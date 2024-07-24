<main>
    <div> <a href="/ctrl/agre/add-agre-display.php">Ajouter des photos d'agrés</a>
    </div>
    <a href="/ctrl/agre/add-agreType-display.php">Ajouter type d'agrés</a>

    <h2> Agrès Feu</h2>
    <?php
    foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>

        <div>


            <h3><?= $args['session']['agre']['name'] ?></h3>
            <a href="/ctrl/agre/agrePhotoFire-display.php?id=<?= $args['session']['agre']['id'] ?>" "> <img src=" data:image/png;base64,<?= base64_encode($args['session']['agre']['illustration']) ?>" alt="">la </a>
        </div>
    <?php } ?>
    <h2>Agrès LED</h2>
    <?php
    foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>

        <div>


            <h3><?= $args['session']['agre']['name'] ?></h3>
            <a href=" /ctrl/agre/agrePhotoLED-display.php?id=<?= $args['session']['agre']['id'] ?>" "> <img src=" data:image/png;base64,<?= base64_encode($args['session']['agre']['illustration']) ?>" alt="">la </a>
        </div>
    <?php } ?>
</main>