<main>
    <section class="backoffice-option" id="members">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <div id="backoffice-member">


            <?php foreach ($args['listMember'] as $member) { ?>
                <div class="backoffice-option-container">
                    <p> Prénom: <?= $member['firstName'] ?> </p>
                    <p> Nom :<?= $member['lastName'] ?></p>
                    <p> Email: <?= $member['email'] ?></p>
                    <p>Téléphone : <?= $member['phoneNumber'] ?></p>
                    <img class="profile-photo" src="data:image/png;base64,<?= base64_encode($member['avatar']) ?>" alt="member-Avatar">
                    <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
                        <p> <a href="/backoffice/delete-member?id=<?= $member['id'] ?>">Enlever</a></p>

                    <?php  } ?>
                </div>
            <?php } ?>

        </div>

    </section>