<main>
    <section id="forum">
        <!--         Check if member has info like firstname and lastname entered 
 -->
        <?php if ($args['session']['user']['firstName'] != null) { ?>
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

                <?php foreach ($args['listDiscussion'] as $discussion) { ?>
                    <div id="discussion-container">
                        <h4 id="discussion-title"><?= $discussion['title'] ?> </h4>
                        <p> <?= $discussion['content'] ?></p>
                        <a target="_blank" href="/ctrl/forum/discussion-detail.php?id=<?= ($discussion['id']) ?>">Voir Détails</a>
                    </div>
                <?php } ?>

            </div>

        <?php } else { ?>
            <h3 id="complete-profile-title"> Pour pouvoir accéder au forum </h3>
            <p class="change-profile-paragraph"> s'il vous plait, </p> <a id="complete-profile-link" href="/profile/profile-display">complétez votre profil</a>
        <?php } ?>


        <div class="fb-page" data-href="https://www.facebook.com/firefrommars/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/firefrommars/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/firefrommars/">FIRE from MARS</a></blockquote>
        </div>



    </section>