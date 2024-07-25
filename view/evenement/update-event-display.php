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
            <textarea id="" name="conventionCost"></textarea>
        </div>

        <div>
            <label for="conventionFirstDay">Modifier Date 1</label>
            <input type="text" id="" name="conventionFirstDay">

            <label for="contentFirstDay">Modifier Contenu date 1 </label>
            <textarea id="" name="contentFirstDay"></textarea>
        </div>
        <div>
            <label for="conventionSecondDay">Modifier Date 2</label>
            <input type="text" id="" name="conventionSecondDay">


            <label for="contentSecondDay">Modifier Contenu date 2 </label>
            <textarea id="" name="contentSecondDay"></textarea>
        </div>
        <div>
            <label for="conventionThirdDay">Modifier Date 3</label>
            <input type="text" id="" name="conventionThirdDay">

            <label for="contentThirdDay">Modifier Contenu date 3 </label>
            <textarea id="" name="contentThirdDay"></textarea>
        </div>

        <div>
            <label for="conventionDescription">Modifier description</label>
            <textarea id="" name="conventionDescription"></textarea>
        </div>
        <label for="address">Modifier Adresse</label>
        <textarea id="" name="address"></textarea>

        <div>
            <button class="submit" type="submit">Valider</button>

        </div>

    </form>
</main>