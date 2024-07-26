<main>
    <form id="" action="/ctrl/evenement/update-event.php" method="post" enctype="multipart/form-data">

        <!-- Update poster photo -->

        <div id="">
            <label for="conventionPhoto">Modifier la photo du Poster</label>
            <input type="file" id="" name="conventionPhoto">
        </div>
        <div id="">
            <label for="programPhoto">Modifier la photo du Programme</label>
            <input type="file" id="" name="programPhoto">
        </div>

        <!-- Update event content-->
        <div>
            <label for="conventionCost">Modifier tarif</label>
            <textarea id="" name="conventionCost"><?= $args['session']['convention']['cost'] ?></textarea>
        </div>

        <div>
            <label for="conventionFirstDay">Modifier Date 1</label>
            <input type="text" id="" name="conventionFirstDay" value="<?= $args['session']['convention']['firstDate'] ?>">

            <label for="contentFirstDay">Modifier Contenu date 1 </label>
            <textarea id="" name="contentFirstDay"><?= $args['session']['convention']['firstDateContent'] ?></textarea>
        </div>
        <div>
            <label for="conventionSecondDay">Modifier Date 2</label>
            <input type="text" id="" name="conventionSecondDay" value="<?= $args['session']['convention']['secondDate'] ?>">


            <label for="contentSecondDay">Modifier Contenu date 2 </label>
            <textarea id="" name="contentSecondDay"><?= $args['session']['convention']['secondDateContent'] ?></textarea>
        </div>
        <div>
            <label for="conventionThirdDay">Modifier Date 3</label>
            <input type="text" id="" name="conventionThirdDay" value="<?= $args['session']['convention']['thirdDate'] ?>">

            <label for="contentThirdDay">Modifier Contenu date 3 </label>
            <textarea id="" name="contentThirdDay"><?= $args['session']['convention']['thirdDateContent'] ?></textarea>
        </div>

        <div>
            <label for="conventionDescription">Modifier description</label>
            <textarea id="" name="conventionDescription"><?= $args['session']['convention']['description'] ?></textarea>
        </div>
        <label for="address">Modifier Adresse</label>
        <textarea id="" name="address"><?= $args['session']['convention']['address'] ?></textarea>

        <div>
            <button class="submit" type="submit">Valider</button>

        </div>

    </form>
</main>