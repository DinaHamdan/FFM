<main>
    <section class="backoffice-option">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <h2 class="participant-name"> <?= $args['contactMessage']['firstName'] ?> <?= $args['contactMessage']['lastName'] ?> </h2>




        <div class="backoffice-option-container">
            <h4> <span>Message de : </span> <?= $args['contactMessage']['firstName'] ?> <?= $args['contactMessage']['lastName'] ?></h4>
            <p><span>Email : </span><a href="mailto:<?= $args['contactMessage']['email'] ?> "><?= $args['contactMessage']['email'] ?></a>
            </p>
            <p> <span>Téléphone : </span> <a href="tel:<?= $args['contactMessage']['phoneNumber'] ?>"><?= $args['contactMessage']['phoneNumber'] ?></a>
            </p>
            <p> <span>Type de demande : </span><?= $args['contactMessage']['type'] ?></p>
            <div class="contact-message">
                <p><span> Message : </span><?= $args['contactMessage']['content'] ?></p>
            </div>
            <p> <span>Le : </span> <?= $args['contactMessage']['time'] ?></p>
        </div>


    </section>