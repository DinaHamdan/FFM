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

        <div class="gallery-wrap">
            <img class="back-scroll" src="/asset/img/back.png" alt="">
            <div id="fire-prop-container">
                <?php
                foreach ($args['typeAgreFeu'] as $typeAgreFeu) { ?>

                    <div class="prop-title-photo-container">
                        <a target="_blank" href=" /ctrl/agre/agrePhotoFire-display.php?id=<?= $typeAgreFeu['idAgre'] ?>"> <img class=" prop-photo" src=" data:image/png;base64,<?= base64_encode($typeAgreFeu['illustration']) ?>" alt=""></a>
                        <h3><?= $typeAgreFeu['agreName'] ?></h3>
                    </div>
                <?php } ?>
            </div>
            <img class="forward-scroll" src="/asset/img/front.png" alt="">
        </div>

        <div class="gallery-container">
            <h2>Lumineux</h2>
        </div>

        <div class="gallery-wrap">
            <img class="back-button" src="/asset/img/back.png" alt="">
            <div id="led-prop-container">
                <?php
                foreach ($args['typeAgreLED'] as $typeAgreLED) { ?>

                    <div class="prop-title-photo-container">


                        <a target="_blank" href="  /ctrl/agre/agrePhotoLED-display.php?id=<?= $typeAgreLED['idAgre'] ?>"> <img class=" prop-photo" src=" data:image/png;base64,<?= base64_encode($typeAgreLED['illustration']) ?>" alt=""></a>
                        <h3><?= $typeAgreLED['agreName'] ?></h3>
                    </div>
                <?php } ?>
            </div>
            <img class="forward-button" src="/asset/img/front.png" alt="">
        </div>
    </section>