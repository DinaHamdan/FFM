<main>
    <section id="gallery">
        <div id="gallery-title-container">
            <h2>Fire From Mars, où le feu et la lumière enflamment votre imagination
                <span> Decouvrez notre monde magique grâce a nos divers agrès</span>
            </h2>
            <h2> </h2>
        </div>
        <div id="gallery-bg-container">
            <div class="gallery-container">
                <h2>Gallerie Agrè</h2>
            </div>
        </div>
        <!-- Check if the user is an admin -->
        <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
            <div id="button-container">
                <a class="add-button" href="/ctrl/agre/add-agre-display.php">Ajouter des photos d'agrés</a>

                <a class="add-button" href="/ctrl/agre/add-agreType-display.php">Ajouter type d'agrés</a>
            </div>
        <?php  } ?>

        <div class="gallery-container">
            <h2 id="fire-prop-title"> Feu</h2>
        </div>
        <div id="fire-prop-container">
            <?php
            foreach ($args['session']['typeAgreFeu'] as $args['session']['agreFeu']) { ?>

                <div class="prop-title-photo-container">
                    <a href="/ctrl/agre/agrePhotoFire-display.php?id=<?= $args['session']['agreFeu']['idAgre'] ?>" "> <img class=" prop-photo" src=" data:image/png;base64,<?= base64_encode($args['session']['agreFeu']['illustration']) ?>" alt="">la </a>
                    <h3><?= $args['session']['agreFeu']['agreName'] ?></h3>
                </div>
            <?php } ?>
        </div>
        <div class="gallery-container">
            <h2>Lumineux</h2>
        </div>

        <div id="led-prop-container">
            <?php
            foreach ($args['session']['typeAgreLED'] as $args['session']['agreLED']) { ?>

                <div class="prop-title-photo-container">


                    <h3><?= $args['session']['agreLED']['agreName'] ?></h3>
                    <a href=" /ctrl/agre/agrePhotoLED-display.php?id=<?= $args['session']['agreLED']['idAgre'] ?>" "> <img  class=" prop-photo" src=" data:image/png;base64,<?= base64_encode($args['session']['agreLED']['illustration']) ?>" alt="">la </a>
                </div>
            <?php } ?>
        </div>
    </section>
</main>