<main>
    <section id="adhesion-section">
        <div id="adhesion-title-container">
            <h2 id="adhesion-title"><?= $args['pageTitle'] ?></h2>
            <p>Soutenir L’association</p>
            <p>Accès aux Fire Jam et partage de connaissances</p>
            <p>Pratique encadrée</p>
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
                <?php foreach ($args['typeAgre'] as $agre) { ?>
                    <div>
                        <input id="<?= $agre['name'] ?>" class="prop-input" type="checkbox" name="agreType[]" value="<?= $agre['name'] ?>" />
                        <label for="<?= $agre['name'] ?>"><?= $agre['name'] ?></label>
                    </div>
                <?php } ?>


            </div>
            <div>
                <label id="other-label" for="talents">Autre talents: </label>
                <input class="input-box" type="text" name="talents" id="talents">
            </div>
            <div>
                <p class="adhesion-paragraph">Soutenez l'asso avec votre participation.
                </p>
                <div> <input type="radio" name="participation" checked value="fire-jam-3">
                    <label for="participation">Adhésion 3€</label>
                </div>

                <input type="radio" name="participation" value="membre-actif-20">
                <label for="participation">Adhésion membre actif 20€ </label>
            </div>

            <p class="adhesion-paragraph">J'autorise Fire From Mars à utiliser mon image</p>

            <div>
                <input type="radio" name="oui_non" checked value="Oui">
                <label for="oui_non">Oui</label>

                <input type="radio" name="oui_non" value="Non">
                <label for="oui_non">Non</label>
            </div>

            <div class="legal-rights">
                <p class="adhesion-paragraph">En cliquant sur Adhérer vous acceptez les <span onclick="show()" class="conditions"> conditions générales d'utilisation</span></p>
                <div id="legal-rights-info">
                    <p>Fire From Mars traite vos données personnelles de manière sécurisée afin de gérer votre adhésion et de vous contacter si nécessaire. L'accès à ces données est strictement réservé aux membres du bureau.</p>
                </div>
            </div>
            <button id="validateAdhesion" type="submit">Adhérer</button>


        </form>
    </section>