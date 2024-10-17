<main>
    <section id="convention">
        <h1 id="convention-first-title"> Jongle En Zik</h1>
        <h2 id="convention-info"><?= $args['session']['convention']['cost'] ?></h2>

        <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
            <a target="_blank" id="modify-event-button" href="/evenement/update-event-display">Modifier l'évenement</a>
        <?php  } ?>

        <div id="convention-poster-container">

            <img src=" data:image/png;base64,<?= base64_encode($args['session']['convention']['poster']) ?>" alt="photo-poster">
            <img src=" data:image/png;base64,<?= base64_encode($args['session']['convention']['programPhoto']) ?>" alt="photo-program">
        </div>
        <div id="convention-description-container">
            <img id="convention-photo" src="../../asset/img/convention-photo.avif" alt="">
            <p id="convention-description"> <?= $args['session']['convention']['description'] ?></p>
        </div>
        <h2 id="convention-program-title">Programme </h2>

        <div id="convention-content">

            <div class="convention-content-container">
                <h3><?= $args['session']['convention']['firstDate'] ?></h3>
                <p> <?= $args['session']['convention']['firstDateContent'] ?></p>
            </div>
            <div class="convention-content-container">
                <h3><?= $args['session']['convention']['secondDate'] ?></h3>

                <p>
                    <?= $args['session']['convention']['secondDateContent'] ?></p>
            </div>
            <div class="convention-content-container">
                <h3><?= $args['session']['convention']['thirdDate'] ?></h3>
                <p> <?= $args['session']['convention']['thirdDateContent'] ?></p>
            </div>

        </div>

        <h3 id="convention-participation-title">Envie de Participer?</h3>

        <div id="button-container">
            <a target="_blank" id="reserve-button" href="https://www.helloasso.com/associations/fire-from-mars/evenements/jongle-en-zik-2024">Réserver ma place</a>
            <a target="_blank" id="volunteer-button" href="/evenement/volunteer-form-display">Devenir Bénévole</a>
        </div>
        <h3 id="convention-address-title"> Adresse </h3>
        <div id="convention-map-container">
            <p> <?= $args['session']['convention']['address'] ?></p>
            <iframe title="carte-jongle-en-zik-google-maps" id="convention-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.471209418771!2d5.16084367585961!3d44.011656229173866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca737337e58ea3%3A0x28d27e168837d5ee!2sSaint-F%C3%A9lix%20S%2C%2084570%20Malemort-du-Comtat!5e0!3m2!1sen!2sfr!4v1723735713018!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </section>