<main>
    <section id="add-prop">
        <h1 class="add-prop-title" id="page-title"><?= $args['pageTitle'] ?></h1>

        <form id="add-prop-form" action="/agre/add-agreType" method="post" enctype="multipart/form-data">

            <!-- Add photos to agre gallerie -->
            <label for="category">Categorie</label>
            <div>
                <?php foreach ($args['listCategory'] as $category) { ?>
                    <input type="checkbox" name="category[]" value="<?= $category['id'] ?>" />
                    <label for="<?= $category['name'] ?>"><?= $category['name'] ?></label>
                <?php } ?>
            </div>
            <div>
                <label for="name">Nom de l'agré</label>
                <input type="text" name="name" id="">

            </div>
            <div>
                <label for="label">Label</label>
                <input type="text" name="label" id="">
            </div>


            <button id="validateProp" type="submit">Valider</button>



        </form>

        <!--         <div id="table-container">

            <table>
                <thead>
                    <th>Agre Id</th>
                    <th>Agre Name</th>
                    <th>Catégorie feu</th>
                    <th>Catégorie lumineux</th>
                    <th>Categorie agré Jour</th>
                    <th>Mise à jour</th>
                    <th>Supprimer</th>



                </thead>
                <tbody>
                    <?php foreach ($args['listAgreTypeCategory'] as $agreTypeCategory) { ?>


                        <tr>
                            <td>
                                <input name="listIdAgre[]" type="hidden" value="<?= $agreTypeCategory['id'] ?> ">
                                <?= $agreTypeCategory['id'] ?>
                            </td>
                            <td><?= $agreTypeCategory['name'] ?> </td>
                            <td>


                                <?php
                                if (empty($agreTypeCategory['category'][0])) { ?>
                                    Non
                                <?php } else { ?>
                                    Oui
                                    <input name="listIdCategoryFire[]" type="hidden" value="1">
                                <?php } ?>
                            </td>
                            <td>


                                <?php
                                if (empty($agreTypeCategory['category'][2])) { ?>
                                    Non
                                <?php } else { ?>
                                    Oui
                                    <input name="listIdCategoryLED[]" type="hidden" value="2">
                                <?php } ?>
                            </td>
                            <td>


                                <?php
                                if (empty($agreTypeCategory['category'][4])) { ?>
                                    Non
                                <?php } else { ?>
                                    Oui
                                    <input name="listIdCategoryDayProp[]" type="hidden" value="3">
                                <?php } ?>
                            </td>

                            <td> <a href="/ctrl/agre/agre-update-display.php?id=<?= $agreTypeCategory['id'] ?>">Modifier</a>
                            </td>
                            <td> <a href="/ctrl/agre/agre-delete.php?id=<?= $agreTypeCategory['id'] ?>" onclick="return confirm('Vous êtes sûr vous voulez enlever?');">Enlever</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
        -->


        <div id="table-container">

            <table>
                <thead>


                </thead>

                <tbody>
                    <?php foreach ($args['listAgreTypeCategory'] as $agreTypeCategory) { ?>
                        <tr>
                            <td>
                                <?= $agreTypeCategory['id'] ?>
                            </td>
                            <td><?= $agreTypeCategory['agreName'] ?> </td>


                            <?php foreach ($agreTypeCategory['category'] as $category) { ?>


                                <td>
                                    <?= $category['categoryName'] ?>
                                </td>


                            <?php } ?>

                            <td> <a href="/ctrl/agre/agre-update-display.php?id=<?= $agreTypeCategory['id'] ?>">Modifier</a>
                            </td>
                            <td> <a href="/ctrl/agre/agre-delete.php?id=<?= $agreTypeCategory['id'] ?>" onclick="return confirm('Vous êtes sûr vous voulez enlever?');">Enlever</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </section>