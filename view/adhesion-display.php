<main>
    <section id="adhesion">
        <div id="adhesion-title-container">
            <h2 id="adhesion-title">><?= $args['pageTitle'] ?></h2>
            <p>Soutenir L’association</p>
            <p>Accès au Fire Jam</p>
            <p>Participation pour Kerdane</p>
            <p>Participation aux prestations</p>

        </div>
        <form id="adhesion-form" action="/ctrl/adhesion/adhesion.php" method="post">
            <h3>Adhésion Fire From Mars</h3>
            <div id="info-container">

                <!-- Last Name -->
                <div>
                    <label for="visitorLastName">Nom : </label>
                    <input class="input-box" type="text" name="visitorLastName" id="visitorLastName" required>
                </div>
                <!-- First Name -->
                <div>
                    <label id="name-label" for="visitorFirstName">Prénom : </label>
                    <input class="input-box" type="text" id="visitorFirstName" name="visitorFirstName" required>
                </div>
                <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
                <div>
                    <label for="visitorEmail">Email : </label>
                    <input class="input-box" type="email" name="visitorEmail" id="visitorEmail" required>
                </div>
                <!-- Phone Number that must be in the following order: 09-09-09-09-09- pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" -->
                <div>
                    <label id="phone-label" for="visitorPhoneNumber">Téléphone : </label>
                    <input class="input-box" type="tel" name="visitorPhoneNumber" id="visitorPhoneNumber" required>
                </div>
            </div>


            <!-- Type of juggling props -->
            <h3>Agrés pratiqués</h3>
            <div id="prop-type">
                <!--         <select name="agreType" id="agreType" multiple>
 -->
                <?php foreach ($args['session']['typeAgre'] as $args['session']['agre']) { ?>
                    <div>
                        <input id="<?= $args['session']['agre']['name'] ?>" class="prop-input" type="checkbox" name="agreType[]" value="<?= $args['session']['agre']['name'] ?>" />
                        <label for="<?= $args['session']['agre']['name'] ?>"><?= $args['session']['agre']['name'] ?></label>
                    </div>
                <?php } ?>


            </div>
            <div>
                <label id="other-label" for="talents">Autre talents: </label>
                <input class="input-box" type="text" name="talents" id="talents">
            </div>

            <label for="oui_non">J'autorise Fire From Mars à utiliser mon image</label>

            <div>
                <input type="radio" name="oui_non" checked value="Oui">
                <input type="radio" name="oui_non" value="Non">
            </div>


            <button id="validateAdhesion" type="submit">S'adhérer</button>




        </form>
    </section>
</main>