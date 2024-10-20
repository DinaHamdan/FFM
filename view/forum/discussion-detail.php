<main>
    <section id="discussion">
        <div id="discussion-detail-container">



            <h2 id="discussion-title"><?= $args['discussion']['title'] ?> </h2>
            <div id="text-photo-container">
                <p> <?= $args['discussion']['content'] ?></p>
                <img id="discussion-image" src="data:image/png;base64,<?= base64_encode($args['discussion']['illustration']) ?>" alt="">
            </div>
            <p>Publié le: <?= $args['discussion']['time'] ?></p>
            <p>Par: <?= $args['discussion']['firstName'] ?></p>


            <?php if (($args['session']['user']['codeRole']) == 'ADM') { ?>
                <a href="/ctrl/forum/delete-discussion.php?id=<?= $args['discussion']['id'] ?>">Enlever Discussion</a>
            <?php } ?>
        </div>
        <h2>Commentaires</h2>

        <?php foreach ($args['discussion']['comments'] as $comment) { ?>

            <div id="comment-container">
                <div id="user-container">

                    <div id="comment-content">

                        <img src="data:image/png;base64,<?= base64_encode($comment['memberInfo']['avatar']) ?>" alt="member-avatar">
                        <p><?= $comment['content'] ?></p>

                        <?php if (($args['session']['user']['codeRole']) == 'ADM') { ?>
                            <a href="/ctrl/forum/delete-comment.php?id=<?= $comment['id'] ?>">Enlever commentaire</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>



        <!-- Add a condtion to check if profile is complete -->
        <!-- Need to add a function at Login to check if profile fname last name and avatar are empty or not  -->
        <!--         //   <?php if (!empty($args['session']['user']['fName'])) { ?>

                <form action="/ctrl/forum/create-comment.php" method="post">
                    <input type="hidden" name="hidden_discussion_id" value="<?= ($args['session']['discussion']['id']) ?>">
                    <textarea name="content" placeholder="Votre commentaire" required></textarea>
                    <button type="submit">Commenter</button>
                </form>
            <?php } else { ?>
                <p><a href="/profile/create-profile.php">Completez votre profile </a> pour commenter.</p>
            <?php } ?> -->

        <!--  -->


        <!-- Formulaire de commentaire -->

        <?php if (($args['session']['user']['codeRole']) == 'MEM' || 'ADM') { ?>
            <div id="leave-comment-container">
                <!-- Form to submit comment -->
                <form action="/ctrl/forum/create-comment.php" method="post">


                    <input type="hidden" name="hidden_discussion_id" value="<?= ($args['discussion']['id']) ?>">

                    <label for="comment">Laissez un commentaire</label>
                    <input type="text" name="comment" id="comment">
                    <button class="submit" type="submit">Envoyer</button>
                </form>
            </div>
        <?php } ?>

    </section>