<main>

    <h2>Welcome to Forum</h2>

    <form id="write-post" action="/ctrl/forum/create-discussion.php" method="post" enctype="multipart/form-data">

        <!-- Write blog-->
        <label for="discussion-title">Article title</label>
        <input type="text" id="discussion-title" name="discussion-title">

        <label for="discussion-content">Write Article here</label>
        <textarea id="discussion-content" name="discussion-content"></textarea>


        <!-- Blog photo -->

        <div id="discussion-photo-container">
            <label for="discussionPhoto">Phoyo</label>
            <input type="file" id="discussionPhoto" name="discussionPhoto">
        </div>

        <div class="center-button">
            <button class="submit" type="submit">Submit</button>

        </div>


    </form>


</main>