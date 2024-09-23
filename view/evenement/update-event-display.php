<main>
    <section id="update-event-section">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <form id="update-event-form" action="/evenement/update-event" method="post" enctype="multipart/form-data">

            <!-- Update poster photo -->


            <label for="conventionPhoto">Modifier la photo du Poster</label>
            <input type="file" id="" name="conventionPhoto">

            <label for="programPhoto">Modifier la photo du Programme</label>
            <input type="file" id="" name="programPhoto">

            <!-- Update event content-->
            <label for="conventionCost">Modifier dates et tarif</label>
            <textarea id="" name="conventionCost"><?= $args['session']['convention']['cost'] ?></textarea>


            <label for="conventionFirstDay">Modifier Date 1</label>
            <input type="text" id="" name="conventionFirstDay" value="<?= $args['session']['convention']['firstDate'] ?>">

            <label for="contentFirstDay">Modifier Contenu date 1 </label>
            <textarea id="" name="contentFirstDay"><?= $args['session']['convention']['firstDateContent'] ?></textarea>

            <label for="conventionSecondDay">Modifier Date 2</label>
            <input type="text" id="" name="conventionSecondDay" value="<?= $args['session']['convention']['secondDate'] ?>">


            <label for="contentSecondDay">Modifier Contenu date 2 </label>
            <textarea id="" name="contentSecondDay"><?= $args['session']['convention']['secondDateContent'] ?></textarea>

            <label for="conventionThirdDay">Modifier Date 3</label>
            <input type="text" id="" name="conventionThirdDay" value="<?= $args['session']['convention']['thirdDate'] ?>">

            <label for="contentThirdDay">Modifier Contenu date 3 </label>
            <textarea id="" name="contentThirdDay"><?= $args['session']['convention']['thirdDateContent'] ?></textarea>

            <label for="conventionDescription">Modifier description</label>
            <textarea id="" name="conventionDescription"><?= $args['session']['convention']['description'] ?></textarea>
            <label for="address">Modifier Adresse</label>
            <textarea id="" name="address"><?= $args['session']['convention']['address'] ?></textarea>

            <button class="submit" type="submit">Valider</button>


        </form>
    </section>
</main>