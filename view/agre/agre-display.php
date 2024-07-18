<main>
    <a href="/ctrl/agre/add-agre-display.php">Ajouter des photos d'agrés</a>

    <?php
    foreach ($args['session']['listPhotoAgre'] as $args['session']['photoAgre']) { ?>
        <img id="agre-photo" src="data:image/png;base64,<?= base64_encode($args['session']['photoAgre']['illustration']) ?>" alt="photo d'un agré">
    <?php } ?>
</main>