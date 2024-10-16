<main>
    <section>
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>


        <form id="update-agre-form" action="/ctrl/agre/agre-update.php" method="post">

            <label for="agreName">Nom </label>
            <input type="text" name="agreName" id="agreName" value="<?= $args['session']['agreById']['name'] ?>">


            <label for="agreLabel">Label </label>
            <input type="text" name="agreLabel" id="agreLabel" value="<?= $args['session']['agreById']['label'] ?>">

            <label for="category">Categorie</label>
            <div>

                <?php foreach ($args['session']['listCategory'] as $args['session']['category']) { ?>
                    <input type="checkbox" name="category[]" value="<?= $args['session']['category']['id'] ?>" />
                    <label for="<?= $args['session']['category']['name'] ?>"><?= $args['session']['category']['name'] ?></label>


                <?php } ?>
            </div>
            <button id="update-pass-button" type="submit">Modifier</button>

        </form>
    </section>