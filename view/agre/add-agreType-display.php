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


    </form>




    <div>
        <table border="1">
            <thead>
                <th>Agre Id</th>
                <th>Agre Name</th>
                <th>Id catégorie feu</th>
                <th>Id catégorie lumineux</th>
                <th>Id categorie agré Jour</th>
            </thead>
            <tbody>
                <?php foreach ($args['session']['listAgreTypeCategory'] as $args['session']['agreTypeCategory']) { ?>


                    <tr>
                        <td>
                            <input type="hidden" value="$args['session']['agreTypeCategory']['id']">
                            <?= $args['session']['agreTypeCategory']['id'] ?>
                        </td>
                        <td><?= $args['session']['agreTypeCategory']['name'] ?> </td>
                        <td>
                            <input type="hidden" value="$args['session']['agreTypeCategory']['category'][0]">
                            <?= $args['session']['agreTypeCategory']['category'][0] ?>
                        </td>
                        <td>
                            <input type="hidden" value="$args['session']['agreTypeCategory']['category'][2]">
                            <?= $args['session']['agreTypeCategory']['category'][2] ?>
                        </td>
                        <td> <input type="hidden" value="$args['session']['agreTypeCategory']['category'][4]">
                            <?= $args['session']['agreTypeCategory']['category'][4] ?> </td>


                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>

</main>