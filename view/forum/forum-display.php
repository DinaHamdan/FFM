<main>


    <form id="" action="/ctrl/forum/create-discussion.php" method="post" enctype="multipart/form-data">

        <!-- Write blog-->
        <label for="discussion-title">Article title</label>
        <input type="text" id="discussion-title" name="discussion-title">

        <label for="discussion-content">Write Article here</label>
        <textarea id="discussion-content" name="discussion-content"></textarea>

        <!-- Blog photo -->

        <div id="discussion-photo-container">
            <label for="discussionPhoto">Photo</label>
            <input type="file" id="discussionPhoto" name="discussionPhoto">
        </div>

        <div>
            <button class="submit" type="submit">Submit</button>

        </div>


    </form>

    <div id="all-discussion-container">

        <?php foreach ($args['session']['listDiscussion'] as $args['session']['discussion']) { ?>
            <p>Title</p>
            <h4 id="discussion-title"><?= $args['session']['discussion']['title'] ?> </h4>
            <p>Content</p>
            <p> <?= $args['session']['discussion']['content'] ?></p>
            <a href="/ctrl/forum/discussion-detail.php?id=<?= ($args['session']['discussion']['id']) ?>">Enter</a>
        <?php } ?>

    </div>




</main>