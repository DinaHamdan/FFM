<main>
    <a href="/ctrl/agre/add-agre-display.php">Ajouter des photos d'agrés</a>
    <a href="/ctrl/agre/add-agreType-display.php">Ajouter type d'agrés</a>

    <h2> Agrès Feu</h2>
    <?php
    foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>

        <div>
            <a href=" "> <img src=" " alt="">la </a>

            <h3><?= $args['session']['agre']['name'] ?></h3>
        </div>
    <?php } ?>
    <h2>Agrès LED</h2>
    <?php
    foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>

        <div>
            <a href=" "> <img src=" " alt="">la </a>

            <h3><?= $args['session']['agre']['name'] ?></h3>
        </div>
    <?php } ?>
</main>