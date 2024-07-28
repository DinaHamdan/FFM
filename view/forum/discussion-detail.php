<main>
    <div id="discussion-detail-container">


        <p>Title</p>
        <h4 id="discussion-title"><?= $args['session']['discussion']['title'] ?> </h4>
        <p>Content</p>
        <p> <?= $args['session']['discussion']['content'] ?></p>
        <img id="discussion-image" src="data:image/png;base64,<?= base64_encode($args['session']['discussion']['illustration']) ?>" alt="discussion-image">
        <p>Published : <?= $args['session']['discussion']['time'] ?></p>


        <?php if (($args['session']['user']['codeRole']) == 'ADM') { ?>
            <a href="/ctrl/forum/delete-discussion.php?id=<?= $args['session']['discussion']['id'] ?>">Enlever Discussion</a>
        <?php } ?>

        <p>Comments</p>

        <?php foreach ($args['session']['discussion']['comments'] as $args['session']['discussion']['comment']) { ?>

            <div id="comment-container">
                <div id="user-container">

                    <div id="comment-content">
                        <p>Posted by</p>
                        <p><?= $args['session']['discussion']['comment']['memberInfo']['firstName'] ?></p>
                        <p><?= $args['session']['discussion']['comment']['memberInfo']['lastName'] ?></p>
                        <img src="data:image/png;base64,<?= base64_encode($args['session']['discussion']['comment']['memberInfo']['avatar']) ?>" alt="member-avatar">
                        <p>content</p>
                        <p><?= $args['session']['discussion']['comment']['content'] ?></p>

                        <?php if (($args['session']['user']['codeRole']) == 'ADM') { ?>
                            <a href="/ctrl/forum/delete-comment.php?id=<?= $args['session']['discussion']['comment']['id'] ?>">Enlever commentaire</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            </div>


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


                        <a href="/ctrl/post/like-post.php?id=<?= $args['session']['discussion']['id'] ?>"><img id="like-logo" src="/asset/img/star.png" alt="star-like-button"></a>
                        <input type="hidden" name="hidden_discussion_id" value="<?= ($args['session']['discussion']['id']) ?>">

                        <label for="comment">Leave a comment</label>
                        <input type="text" name="comment" id="comment">
                        <button class="submit" type="submit">Submit</button>

                </div>
            <?php } ?>
            </form>

</main>