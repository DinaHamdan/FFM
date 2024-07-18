<main>
    <form id="adhesion-form" action="/ctrl/adhesion/adhesion.php" method="post">



        <!-- Last Name -->
        <div>
            <label for="visitorLastName">Nom : </label>
            <input type="text" name="visitorLastName" id="visitorLastName" required>
        </div>
        <!-- First Name -->
        <div>
            <label for="visitorFirstName">Prénom : </label>
            <input type="text" id="visitorFirstName" name="visitorFirstName" required>
        </div>
        <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
        <div>
            <label for="visitorEmail">Email : </label>
            <input type="email" name="visitorEmail" id="visitorEmail" required>
        </div>
        <!-- Phone Number that must be in the following order: 09-09-09-09-09- pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" -->
        <div>
            <label for="visitorPhoneNumber">Numéro de téléphone : </label>
            <input type="tel" name="visitorPhoneNumber" id="visitorPhoneNumber" required>
        </div>


        <!-- Type of juggling props -->

        <div>
            <!--         <select name="agreType" id="agreType" multiple>
 -->
            <?php foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>
                <div>
                    <input type="checkbox" name="agreType[]" value="<?= $args['session']['agre']['name'] ?>" />
                    <label for="<?= $args['session']['agre']['name'] ?>"><?= $args['session']['agre']['name'] ?></label>
                </div>
            <?php } ?>


        </div>
        <div>
            <label for="talents">Autre talents </label>
            <input type="text" name="talents" id="talents">
        </div>


        <div>

            <label for="oui_non">J'autorise Fire From Mars à utiliser mon image</label>
            <input type="radio" name="oui_non" checked value="oui">Oui</input>
            <input type="radio" name="oui_non" value="non">Non</input>

        </div>
        </select>

        <button class="submit" type="submit">Envoyer</button>




    </form>
</main>