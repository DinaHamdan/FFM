<main>
    <section id="volunteer-form-section">
        <h2>Formulaire Bénévole</h2>
        <form id="volunteer-form" action="/evenement/volunteer" method="post">

            <div class="basic-answer-options">
                <!-- First Name -->
                <div>
                    <label for="firstName">Prénom : </label>
                    <input class="input-box" type="text" name="firstName" id="firstName" required>
                </div>

                <!-- Last Name -->
                <div>
                    <label for="lastName">Nom : </label>
                    <input class="input-box" type="text" id="lastName" name="lastName" required>
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="birthday">Date de naissance</label>
                    <input class="input-box" type="date" name="birthday" id="volunteerBirthday">
                </div>

                <!-- Phone Number that must be in the following order: 09-09-09-09-09- pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" -->
                <div>
                    <label for="phoneNumber">Téléphone : </label>
                    <input class="input-box" type="tel" name="phoneNumber" id="volunteerPhoneNumber" required>
                </div>

                <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
                <div>
                    <label for="email">Email : </label>
                    <input class="input-box" type="email" name="email" id="volunteerEmail" required>
                </div>

                <!-- Date of arrival-->
                <div>
                    <label for="dateArrival">Date prévu d'arrivée</label>
                    <input class="input-box" type="date" name="dateArrival" id="dateArrival">
                </div>

                <!-- Date of departure-->
                <div>
                    <label for="dateDepart">Date prévu de départ</label>
                    <input class="input-box" type="date" name="dateDepart" id="dateDepart">
                </div>
            </div>
            <!-- Which part of the event for volunteer work -->
            <p>Sur quelle partie de la conv souhaites tu être bénévole? (plusieurs réponses possibles) </p>

            <div class="answer-options">
                <div> <input type="checkbox" name="dayOptions[]" value="avant" /> <label for="avant"> Avant la conv pour le montage (la semaine précédant la conv, à partir de ta date d'arrivée)</label></div>
                <div> <input type="checkbox" name="dayOptions[]" value="pendant"><label for="pendant"> Pendant la conv (du vendredi après midi au dimanche midi)</label></div>
                <div> <input type="checkbox" name="dayOptions[]" value="apres"><label for="apres">Après la conv pour le démontage jusqu'au lund</label></div>
            </div>


            <!-- Which time of the day for volunteer work   -->
            <p> Pendant la conv, le ou les moments de la journée où tu préfères être en poste :</p>

            <div class="answer-options">
                <div> <input type="checkbox" name="timeOptions[]" value="matin" id=""><label for="matin">Matin</label> </div>
                <div> <input type="checkbox" name="timeOptions[]" value="apres-midi" id=""><label for="apres-midi">Après-midi</label> </div>

                <div> <input type="checkbox" name="timeOptions[]" value="soir" id=""><label for="soir">Soir</label> </div>
                <div> <input type="checkbox" name="timeOptions[]" value="nuit" id=""><label for="night">Nuit</label> </div>

            </div>

            <!-- What kind of volunteer work -->


            <p>On essayera de ne pas trop vous faire multiplier les tâches différentes mais on devra faire un peu tourner selon les besoins, cette rubrique est donc là pour indiquer tes préférences et pas pour te garantir d'être engagé uniquement sur un pôle.
                Parmi les postes suivants, coche les 3 qui t'intéressent le plus : *
            </p>

            <div class="answer-options">
                <div> <input type="checkbox" name="workOptions[]" value="restaurant-cuisine" id=""> <label for="restaurant">Restaurant/ cuisine</label> </div>
                <div><input type="checkbox" name="workOptions[]" value="bar" id=""> <label for="bar">Bar</label></div>
                <div><input type="checkbox" name="workOptions[]" value="technique" id=""> <label for="technique">Technique</label></div>
                <div><input type="checkbox" name="workOptions[]" value="fire" id=""> <label for="espace-feu">Espace feu</label></div>
                <div><input type="checkbox" name="workOptions[]" value="acceuil" id=""> <label for="acceuil">Acceuil </label></div>
                <div><input type="checkbox" name="workOptions[]" value="conducteur" id=""> <label for="conducteur">Conducteur (permis B classique)</label>
                </div>
            </div>
            <!-- extra information -->
            <div>
                <label for="extraWorkInfo">Tu peux apporter des précisions si tu le souhaites (expérience passée, attrait particulier...) :</label>
                <input class="input-box" type="text" name="extraWorkInfo" id="">
            </div>
            <div>
                <label for="psc1">As-tu un diplôme PSC1 ou autre?</label>
                <input class="input-box" type="text" name="psc1" id="">
            </div>
            <!-- Transportation -->
            <p>Ton moyen pour venir:</p>

            <div class="answer-options">
                <div> <input type="radio" name="transport" value="train" id=""><label for="train">Train</label> </div>
                <div> <input type="radio" name="transport" value="voiture" id=""><label for="voiture">voiture</label> </div>
                <label for="otherTransport">Autre: </label><input name="otherTransport" type="text">
            </div>
            <!-- Sleeping situation  -->
            <p>Ton mode d'hébergement:*</p>
            <div class="answer-options">
                <div> <input type="radio" name="lodging" value="camping" id=""> <label for="camping">Camping</label> </div>
                <div> <input type="radio" name="lodging" value="camion" id=""><label for="camion">Camion</label> </div>
                <div> <input type="radio" name="lodging" value="hors-site" id=""><label for="hors-site">Hors site</label> </div>


            </div>
            <!-- Fire show -->
            <p>Souhaites-tu participer à un spectacle</p>

            <div class="answer-options">
                <div> <input type="checkbox" name="show[]" value="spectacle-feu" id=""><label for="spectacle-feu">spectacle feu</label> </div>
                <div> <input type="checkbox" name="show[]" value="scene-ouverte" id=""><label for="scene-ouverte">scène ouverte(intérieur)</label> </div>
                <div> <input type="checkbox" name="show[]" value="salle-des-fetes" id=""><label for="salle-des-fetes">spectacle à la salle des fêtes</label> </div>
                <div> <input type="checkbox" name="show[]" value="Aucun" id=""><label for="sAucun">Aucun</label> </div>

            </div>
            <!-- food restrictions -->
            <div class="answer-options">
                <label for="foodRestrictions">Un régime alimentaire spécifique ?</label>
                <input class="input-box" type="text" name="foodRestrictions" id="">
            </div>
            <div class="answer-options">
                <!-- Other info -->
                <label for="otherInfo">D'autres infos à nous communiquer à ton sujet ?</label>
                <input class="input-box" type="text" name="otherInfo" id="">
            </div>
            <p>En finissant de remplir ce formulaire, tu t'engages à être dispo aux dates prévues ou à nous signaler si ça change. La conv compte sur toi !</p>
            <div class="legal-rights">
                <p>En cliquant sur Envoyer vous acceptez les <span onclick="show()" class="conditions"> conditions générales d'utilisation</span></p>
                <div id="legal-rights-info">
                    <p>Fire From Mars traite vos données personnelles de manière sécurisée afin de gérer les bénévoles et de vous contacter si nécessaire. L'accès à ces données est strictement réservé aux membres du bureau.</p>
                </div>
            </div>
            <button id="validateVolunteer" type="submit">Envoyer</button>

        </form>

    </section>