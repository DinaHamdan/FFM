<main>
    <section id="add-prop">
        <h1 id="add-prop-title"><?= $args['pageTitle'] ?></h1>


        <form id="add-prop-form" action="/ctrl/agre/agre-update.php" method="post">
            <input type="hidden" name="idAgre" value="<?= $args['session']['idAgre'] ?>">
            <div>
                <label for="agreName">Nom de l'agré </label>
                <input type="text" name="agreName" id="agreName" value="<?= $args['session']['agreById']['name'] ?>">
            </div>
            <div>

                <label for="agreLabel">Label </label>
                <input type="text" name="agreLabel" id="agreLabel" value="<?= $args['session']['agreById']['label'] ?>">
            </div>
            <label for="category">Categorie</label>
            <div>

                <?php foreach ($args['session']['listCategory'] as $args['session']['category']) { ?>
                    <input type="checkbox" name="category[]" value="<?= $args['session']['category']['id'] ?>" />
                    <label for="<?= $args['session']['category']['name'] ?>"><?= $args['session']['category']['name'] ?></label>


                <?php } ?>
            </div>
            <button id="validateProp" type="submit">Modifier</button>

        </form>
    </section>