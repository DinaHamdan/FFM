<main>
    <section id="forum">
        <h1>Forum</h1>
        <h3>Commencez une discussion</h3>
        <form id="forum-form" action="/ctrl/forum/create-discussion.php" method="post" enctype="multipart/form-data">

            <!-- Write blog-->
            <label for="discussion-title">Titre de la discussion</label>
            <input type="text" id="discussion-title" name="discussion-title">

            <label for="discussion-content">Contenu de la discussion</label>
            <textarea id="discussion-content" name="discussion-content"></textarea>

            <!-- Blog photo -->
            <div id="discussion-photo-container">
                <label for="discussionPhoto">Possibilité d'ajouter une photo</label>
                <input type="file" id="discussionPhoto" name="discussionPhoto">
            </div>

            <div>
                <button id="validateDiscussion" type="submit">Valider</button>

            </div>


        </form>
        <h3>Discussions Précédentes</h3>
        <div id="all-discussion-container">

            <?php foreach ($args['session']['listDiscussion'] as $args['session']['discussion']) { ?>
                <div id="discussion-container">
                    <h4 id="discussion-title"><?= $args['session']['discussion']['title'] ?> </h4>
                    <p> <?= $args['session']['discussion']['content'] ?></p>
                    <a href="/ctrl/forum/discussion-detail.php?id=<?= ($args['session']['discussion']['id']) ?>">Voir Détails</a>
                </div>
            <?php } ?>

        </div>



    </section>
</main>