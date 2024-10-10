<main>
    <section id="add-photo-section">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <form id="add-photo-form" action="/agre/add-agre" method="post" enctype="multipart/form-data">

            <!-- Add photos to agre gallerie -->

            <div>
                <label for="category">Categorie</label>
                <select name="category" id="">

                    <?php foreach ($args['session']['listCategory'] as $args['session']['category']) { ?>
                        <option value="<?= $args['session']['category']['id'] ?>"><?= $args['session']['category']['name'] ?></option>

                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="agreType">Type d'agré</label>
                <select name="agreType" id="">

                    <?php foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>

                        <option value="<?= $args['session']['agre']['id'] ?>"><?= $args['session']['agre']['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="agrePhoto">Ajouter des photos d'agrès</label>
                <input type="file" id="agrePhoto" name="agrePhoto[]" multiple>

            </div>

            <button id="validatePhoto" type="submit">Valider</button>

        </form>
    </section>