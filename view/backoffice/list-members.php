<main>
    <section class="backoffice-option" id="members">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div>


            <?php foreach ($args['session']['listMember'] as $args['session']['member']) { ?>
                <div class="backoffice-option-container" id="member-container">
                    <p> Prénom: <?= $args['session']['member']['firstName'] ?> Nom :<?= $args['session']['member']['lastName'] ?></p>
                    <p> Email: <?= $args['session']['member']['email'] ?></p>
                    <p>Téléphone : <?= $args['session']['member']['phoneNumber'] ?></p>
                    <img id="profile-photo" src="data:image/png;base64,<?= base64_encode($args['session']['member']['avatar']) ?>" alt="member-Avatar">
                    <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
                        <p> <a href="/ctrl/backoffice/delete-member.php?id=<?= $args['session']['member']['id'] ?>">Remove</a></p>

                    <?php  } ?>
                </div>
            <?php } ?>

        </div>

    </section>
</main>