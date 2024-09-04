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
        <?php
        foreach ($args['session']['adminAgreFeu'] as $args['session']['agreFeu']) { ?>

            <a href="/ctrl/agre/agrePhotoFire-display.php?id=<?= $args['session']['agreFeu']['id'] ?>" "> <?= $args['session']['agreFeu']['name'] ?></a>
                        <?php } ?>  


        <div class=" gallery-container">
                <h2>Lumineux</h2>
                </div>
                <?php
                foreach ($args['session']['adminAgreLED'] as $args['session']['agreLED']) { ?>

                    <a href="/ctrl/agre/agrePhotoLED-display.php?id=<?= $args['session']['agreLED']['id'] ?>" "> <?= $args['session']['agreLED']['name'] ?></a>
                        <?php } ?>  

              
                
    </section>
</main>