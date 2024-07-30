<main>

    <!-- Add required  -->
    <form id="" action="/ctrl/evenement/volunteer.php" method="post">

        <!-- Last Name -->
        <div>
            <label for="firstName">Nom : </label>
            <input type="text" name="firstName" id="volunteerLastName" required>
        </div>

        <!-- First Name -->
        <div>
            <label for="lastName">Prénom : </label>
            <input type="text" id="lastName" name="volunteerFirstName" required>
        </div>

        <!-- Date of Birth -->
        <div>
            <label for="birthday">Date de naissance</label>
            <input type="date" name="birthday" id="volunteerBirthday">
        </div>

        <!-- Phone Number that must be in the following order: 09-09-09-09-09- pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" -->
        <div>
            <label for="phoneNumber">Numéro de téléphone : </label>
            <input type="tel" name="phoneNumber" id="volunteerPhoneNumber" required>
        </div>

        <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
        <div>
            <label for="email">Email : </label>
            <input type="email" name="email" id="volunteerEmail" required>
        </div>

        <!-- Date of arrival-->
        <div>
            <label for="dateArrival">Date prévu d'arrivée</label>
            <input type="date" name="dateArrival" id="dateArrival">
        </div>

        <!-- Date of departure-->
        <div>
            <label for="dateDepart">Date prévu de départ</label>
            <input type="date" name="dateDepart" id="dateDepart">
        </div>

        <!-- Which part of the event for volunteer work -->
        <div>
            <p>Sur quelle partie de la conv souhaites tu être bénévole? (plusieurs réponses possibles) </p>
            <input type="checkbox" name="dayOptions[]" value="avant" /> <label for="before"> Avant la conv pour le montage (la semaine précédant la conv, à partir de ta date d'arrivée)</label>
            <input type="checkbox" name="dayOptions[]" value="pendant"><label for="during"> Pendant la conv (du vendredi après midi au dimanche midi)</label>
            <input type="checkbox" name="dayOptions[]" value="apres"><label for="apres">Après la conv pour le démontage jusqu'au lund</label>
        </div>


        <!-- Which time of the day for volunteer work   -->
        <div>
            <p> Pendant la conv, le ou les moments de la journée où tu préfères être en poste :</p>
            <input type="checkbox" name="timeOptions[]" value="morning" id=""><label for="morning">Matin</label>
            <input type="checkbox" name="timeOptions[]" value="afteernoon" id=""><label for="afteernoon">Après-midi</label>

            <input type="checkbox" name="timeOptions[]" value="evening" id=""><label for="evening">Soir</label>
            <input type="checkbox" name="timeOptions[]" value="night" id=""><label for="night">Nuit</label>

        </div>

        <!-- What kind of volunteer work -->
        <p>On essayera de ne pas trop vous faire multiplier les tâches différentes mais on devra faire un peu tourner selon les besoins, cette rubrique est donc là pour indiquer tes préférences et pas pour te garantir d'être engagé uniquement sur un pôle.
            Parmi les postes suivants, coche les 3 qui t'intéressent le plus : *
        </p>
        <input type="checkbox" name="workOptions[]" value="restaurant" id=""> <label for="restaurant">Restaurant/ cuisine</label>
        <input type="checkbox" name="workOptions[]" value="bar" id=""> <label for="bar">Bar</label>
        <input type="checkbox" name="workOptions[]" value="technical" id=""> <label for="technical">Technique</label>
        <input type="checkbox" name="workOptions[]" value="fire" id=""> <label for="fire">Espace feu</label>
        <input type="checkbox" name="workOptions[]" value="welcome" id=""> <label for="welcome">Acceuil </label>
        <input type="checkbox" name="workOptions[]" value="driver" id=""> <label for="driver">Conducteur (permis B classique)</label>

        <!-- extra information -->
        <div>
            <label for="extraWorkInfo">Tu peux apporter des précisions si tu le souhaites (expérience passée, attrait particulier...) :</label>
            <input type="text" name="extraWorkInfo" id="">

            <label for="psc1">As-tu un diplôme PSC1 ou autre?</label>
            <input type="text" name="psc1" id="">
        </div>
        <!-- Transportation -->
        <div>
            <p>Ton moyen pour venir:</p>
            <input type="radio" name="transport" value="train" id=""><label for="train">Train</label>
            <input type="radio" name="transport" value="car" id=""><label for="car">Voiture</label>
            <label for="other">Autre: </label><input name="transport" type="text">
        </div>
        <!-- Sleeping situation  -->
        <div>

            <p>Ton mode d'hébergement:*</p>
            <input type="radio" name="lodging" value="camp" id=""><label for="camp">Camping</label>
            <input type="radio" name="lodging" value="van" id=""><label for="van">Camion</label>
            <input type="radio" name="lodging" value="external" id=""><label for="external">Hors site</label>


        </div>
        <!-- Fire show -->
        <div>
            <p>Souhaites-tu participer à un spectacle</p>
            <input type="checkbox" name="show[]" value="fireShow" id=""><label for="fireShow">spectacle feu</label>
            <input type="checkbox" name="show[]" value="openScene" id=""><label for="openScene">scène ouverte(intérieur)</label>
            <input type="checkbox" name="show[]" value="hallShow" id=""><label for="hallShow">spectacle à la salle des fêtes</label>

        </div>
        <!-- food restrictions -->
        <div>
            <label for="foodRestrictions">Un régime alimentaire spécifique ?</label>
            <input type="text" name="foodRestrictions" id="">
        </div>
        <div>
            <!-- Other info -->
            <label for="otherInfo">D'autres infos à nous communiquer à ton sujet ?</label>
            <input type="text" name="otherInfo" id="">
        </div>
        <p>En finissant de remplir ce formulaire, tu t'engages à être dispo aux dates prévues ou à nous signaler si ça change. La conv compte sur toi !</p>

        <button class="submit" type="submit">Envoyer</button>

    </form>
</main>