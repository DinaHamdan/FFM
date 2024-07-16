<main>
    <div id="discussion-detail-container">


        <p>Title</p>
        <h4 id="discussion-title"><?= $args['session']['discussion']['title'] ?> </h4>
        <p>Content</p>
        <p> <?= $args['session']['discussion']['content'] ?></p>
        <img id="discussion-image" src="data:image/png;base64,<?= base64_encode($args['session']['discussion']['illustration']) ?>" alt="discussion-image">
        <p>Published : <?= $args['session']['discussion']['time'] ?></p>
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
                    </div>
                </div>
            <?php } ?>
            </div>
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