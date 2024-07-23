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


    <a href="/ctrl/agre/agreTypeCategory-display.php">Agre Type Category</a>


    <div>
        <?php
        foreach ($args['session']['listAgreTypeCategory'] as $args['session']['agreTypeCategory']) { ?>

            <table border="1">
                <th>Agre Id</th>
                <th>Agre Name</th>
                <th>Agre Category Fire</th>
                <th>Agre Category LED</th>
                <th>Agre Category Day Prop</th>
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
            </table>
        <?php } ?>

    </div>

</main>