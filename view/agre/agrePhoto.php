<main>
    <section id="agre-photo-section">
        <h1 id="page-title"><?= $args['agreName'] ?></h1>
        <div id="agre-photo-container">
            <?php
            foreach ($args['listAgrePhoto'] as $agrePhoto) { ?>
                <img class="prop-photo" src="data:image/png;base64,<?= base64_encode($agrePhoto['illustration']) ?>" alt="photo d'agrés">

                <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
                    <div id="">
                        <a href="/agre/remove-agrePhoto?id=<?= $agrePhoto['id'] ?>" onclick="return confirm('Vous êtes sûr vous voulez enlever la photo?');">Enlever la photo</a>
                    </div>
                    <form action="/agre/mainAgrePhoto " method="post">
                        <input type="hidden" name="typeAgreOfPhoto" value="<?= $agrePhoto['idTypeAgre'] ?>">
                        <input type="hidden" name="categoryOfPhoto" value="<?= $agrePhoto['idCategory'] ?> ">
                        <label for="mainPhoto">Choisir Cette photo comme photo de la gallerie</label> <input value="<?= $agrePhoto['id'] ?>" name="mainPhoto" type="checkbox">
                        <input type="submit" value="Valider">
                    </form>
                <?php  } ?>

            <?php } ?>
        </div>
    </section>