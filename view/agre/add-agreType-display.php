<main>
    <form action="/ctrl/agre/add-agreType.php" method="post" enctype="multipart/form-data">

        <!-- Add photos to agre gallerie -->

        <div id="agrePhoto-container">

            <label for="category">Categorie</label>

            <?php foreach ($args['session']['listCategory'] as $args['session']['category']) { ?>
                <input type="checkbox" name="category[]" value="<?= $args['session']['category']['id'] ?>" />
                <label for="<?= $args['session']['category']['name'] ?>"><?= $args['session']['category']['name'] ?></label>


            <?php } ?>
            <div>
                <label for="name">Nom de l'agré</label>
                <input type="text" name="name" id="">
                <label for="label">Label</label>
                <input type="text" name="label" id="">


            </div>
        </div>

        <button class="submit" type="submit">valider</button>





        <div>
            <table border="1">
                <thead>
                    <th>Agre Id</th>
                    <th>Agre Name</th>
                    <th>Catégorie feu</th>
                    <th>Catégorie lumineux</th>
                    <th>Categorie agré Jour</th>
                </thead>
                <tbody>
                    <?php foreach ($args['session']['listAgreTypeCategory'] as $args['session']['agreTypeCategory']) { ?>


                        <tr>
                            <td>
                                <input name="listIdAgre[]" type="hidden" value="<?= $args['session']['agreTypeCategory']['id'] ?> ">
                                <?= $args['session']['agreTypeCategory']['id'] ?>
                            </td>
                            <td><?= $args['session']['agreTypeCategory']['name'] ?> </td>
                            <td>


                                <?php
                                if (!($args['session']['agreTypeCategory']['category'][0])) { ?>
                                    Non
                                <?php } else { ?>
                                    Oui
                                    <input name="listIdCategoryFire[]" type="hidden" value="1">
                                <?php } ?>
                            </td>
                            <td>


                                <?php
                                if (empty($args['session']['agreTypeCategory']['category'][2])) { ?>
                                    Non
                                <?php } else { ?>
                                    Oui
                                    <input name="listIdCategoryLED[]" type="hidden" value="2">
                                <?php } ?>
                            </td>
                            <td>


                                <?php
                                if (empty($args['session']['agreTypeCategory']['category'][4])) { ?>
                                    Non
                                <?php } else { ?>
                                    Oui
                                    <input name="listIdCategoryDayProp[]" type="hidden" value="3">
                                <?php } ?>
                            </td>


                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </form>
</main>