<main>
    <section id="gallery">
        <div id="gallery-title-container">
            <h2>Fire From Mars, où le feu et la lumière enflamment votre imagination
                <span> Decouvrez notre monde magique grâce a nos divers agrès</span>
            </h2>
        </div>

        <div id="gallery-bg-container">
            <div class="gallery-container">
                <h2>Gallerie Agrè</h2>
            </div>
        </div>

        <!-- Check if the user is an admin -->
        <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
            <div id="button-container">
                <a class="add-button" href="/agre/add-agre-display">Ajouter des photos d'agrés</a>

                <a class="add-button" href="/agre/add-agreType-display">Ajouter type d'agrés</a>
            </div>


        <?php  } ?>
        <div class="gallery-container">
            <h2 id="fire-prop-title"> Feu</h2>
        </div>
        <div class="admin-prop-button-container">
            <?php
            foreach ($args['adminAgreFeu'] as $agreFeu) { ?>
                <a target="_blank" class="admin-prop-button" href="/ctrl/agre/agrePhotoFire-display.php?id=<?= $agreFeu['id'] ?>"> <?= $agreFeu['name'] ?></a>
                <!--  <a class="admin-prop-button" href="/ctrl/agre/agrePhotoFire-update.php?id=<?= $agreFeu['id'] ?>">Modifier</a>
                    <a class="admin-prop-button" href="/ctrl/agre/agreFire-delete.php?id=<?= $agreFeu['id'] ?>" onclick="return confirm('Vous êtes sûr vous voulez enlever?');">Enlever</a> -->

            <?php } ?>
        </div>

        <div class=" gallery-container">
            <h2>Lumineux</h2>
        </div>
        <div class="admin-prop-button-container">
            <?php

            foreach ($args['adminAgreLED'] as $agreLED) { ?>
                <a target="_blank" class="admin-prop-button" href="/ctrl/agre/agrePhotoLED-display.php?id=<?= $agreLED['id'] ?>"> <?= $agreLED['name'] ?></a>


            <?php } ?>
        </div>

    </section>