<main>
    <form action="/ctrl/agre/add-agre.php" method="post" enctype="multipart/form-data">

        <!-- Add photos to agre gallerie -->

        <div id="agrePhoto-container">

            <label for="category">Categorie</label>
            <select name="category" id="">

                <?php foreach ($args['session']['listCategory'] as $args['session']['category']) { ?>
                    <option value="<?= $args['session']['category']['id'] ?>"><?= $args['session']['category']['name'] ?></option>

                <?php } ?>
            </select>
            <label for="agreType">Type d'agré</label>
            <select name="agreType" id="">

                <?php foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>
                    <option value="<?= $args['session']['agre']['id'] ?>"><?= $args['session']['agre']['name'] ?></option>

                <?php } ?>
            </select>
            <label for="agrePhoto">Ajouter des photos d'agrès</label>
            <input type="file" id="agrePhoto" name="agrePhoto[]" multiple>


        </div>

        <button class="submit" type="submit">valider</button>


    </form>
</main>