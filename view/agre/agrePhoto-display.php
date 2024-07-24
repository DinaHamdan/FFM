<main>


    <?php
    foreach ($args['session']['listAgrePhoto'] as $args['session']['agrePhoto']) { ?>

        <img src="data:image/png;base64,<?= base64_encode($args['session']['agrePhoto']['illustration']) ?>" alt="photo d'agrés">

        <?php if ($args['session']['user']['codeRole'] == 'ADM') { ?>
            <div id="">
                <a href="/ctrl/agre/remove-agrePhoto.php?id=<?= $args['session']['agrePhoto']['id'] ?>" onclick="return confirm('are you sure you want to remove?');">Enlever la photo</a>
            </div>
            <form action="/ctrl/agre/mainAgrePhoto.php " method="post">
                <input type="hidden" name="typeAgreOfPhoto" value="<?= $args['session']['agrePhoto']['idTypeAgre'] ?>">
                <input type="hidden" name="categoryOfPhoto" value="<?= $args['session']['agrePhoto']['idCategory'] ?> ">
                <label for="mainPhoto">Choisir Cette photo comme photo de la gallerie</label> <input value="<?= $args['session']['agrePhoto']['id'] ?>" name="mainPhoto" type="checkbox">
                <input type="submit" value="Valider">
            </form>
        <?php  } ?>

    <?php } ?>
</main>