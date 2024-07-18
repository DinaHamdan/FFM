<main>
    <form id="volunteer-form" action="/ctrl/evenement/volunteer.php" method="post">

        <!-- Last Name -->
        <div>
            <label for="volunteerLastName">Nom : </label>
            <input type="text" name="volunteerLastName" id="volunteerLastName" required>
        </div>

        <!-- First Name -->
        <div>
            <label for="volunteerFirstName">Prénom : </label>
            <input type="text" id="volunteerFirstName" name="volunteerFirstName" required>
        </div>

        <!-- Date of Birth -->
        <div>
            <label for="volunteerBirthday">Date de naissance</label>
            <input type="date" name="volunteerBirthday" id="volunteerBirthday">
        </div>

        <!-- Phone Number that must be in the following order: 09-09-09-09-09- pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" -->
        <div>
            <label for="volunteerPhoneNumber">Numéro de téléphone : </label>
            <input type="tel" name="volunteerPhoneNumber" id="volunteerPhoneNumber" required>
        </div>

        <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
        <div>
            <label for="volunteerEmail">Email : </label>
            <input type="email" name="volunteerEmail" id="volunteerEmail" required>
        </div>

        <!-- Date of arrival-->
        <div>
            <label for="volunteerArrival">Date prévu d'arrivée</label>
            <input type="date" name="volunteerArrival" id="volunteerArrival">
        </div>

        <!-- Date of departure-->
        <div>
            <label for="volunteerDeparture">Date prévu de départ</label>
            <input type="date" name="volunteerDepartue=re" id="volunteerDeparture">
        </div>

        <!-- Which part of the event for volunteer work -->
        <div>
            <p>Sur quelle partie de la conv souhaites tu être bénévole? (plusieurs réponses possibles) </p>
            <input type="checkbox" name="opt-1"><label for="opt-1">Avant la conv pour le montage (la semaine précédant la conv, à partir de ta date d'arrivée)</label>
            <input type="checkbox" name="opt-2"><label for="opt-2">Pendant la conv (du vendredi après midi au dimanche midi)</label>
            <input type="checkbox" name="opt-3"><label for="opt-3">Après la conv pour le démontage jusqu'au lund</label>
        </div>
        <!-- Which time of the day for volunteer work   -->
        <div>
            <p> Pendant la conv, le ou les moments de la journée où tu préfères être en poste :</p>
            <input type="checkbox" name="morning" id=""><label for="morning">Matin</label>
            <input type="checkbox" name="afternoon" id=""><label for="afteernoon">Après-midi</label>

            <input type="checkbox" name="evening" id=""><label for="evening">Soir</label>
            <input type="checkbox" name="night" id=""><label for="night">Soir</label>

        </div>

        <!-- What kind of volunteer work -->
        <p>On essayera de ne pas trop vous faire multiplier les tâches différentes mais on devra faire un peu tourner selon les besoins, cette rubrique est donc là pour indiquer tes préférences et pas pour te garantir d'être engagé uniquement sur un pôle.
            Parmi les postes suivants, coche les 3 qui t'intéressent le plus : *
        </p>
        <input type="checkbox" name="restaurant" id=""> <label for="restaurant">Restaurant/ cuisine</label>
        <input type="checkbox" name="bar" id=""> <label for="bar">Bar</label>
        <input type="checkbox" name="technical" id=""> <label for="technical">Technique</label>
        <input type="checkbox" name="fire" id=""> <label for="fire">Espace feu</label>
        <input type="checkbox" name="welcome" id=""> <label for="welcome">Acceuil </label>
        <input type="checkbox" name="driver" id=""> <label for="driver">Conducteur (permis B classique)</label>

        <!-- extra information -->
        <div>
            <label for="extra-info">Tu peux apporter des précisions si tu le souhaites (expérience passée, attrait particulier...) :</label>
            <input type="text" name="extra-info" id="">
            <label for="psc1">As-tu un diplôme PSC1 ou autre?</label>
            <input type="text" name="psc1" id="">
        </div>
        <!-- Transportation -->
        <div>
            <p>Ton moyen pour venir:</p>
            <input type="checkbox" name="train" id=""><label for="train">Train</label>
            <input type="checkbox" name="car" id=""><label for="car">voiture</label>
            <label for="other">Autre: </label><input type="text">
        </div>
        <!-- Sleeping situation  -->
        <div>

            <p>Ton mode d'hébergement:*</p>
            <input type="checkbox" name="camp" id=""><label for="camp">Camping</label>
            <input type="checkbox" name="van" id=""><label for="van">Camion</label>
            <input type="checkbox" name="external" id=""><label for="external">Hors site</label>


        </div>
        <!-- Fire show -->
        <div>
            <p>Souhaites-tu participer à un spectacle</p>
            <input type="checkbox" name="fireShow" id=""><label for="fireShow">spectacle feu</label>
            <input type="checkbox" name="openScene" id=""><label for="openScene">scène ouverte(intérieur)</label>
            <input type="checkbox" name="hallShow" id=""><label for="hallShow">spectacle à la salle des fêtes</label>

        </div>
        <!-- food restrictions -->
        <div>
            <label for="foodRestrictions">Un régime alimentaire spécifique ?</label>
            <input type="text" name="foodRestrictions" id="">
        </div>
        <div>
            <!-- Other info -->
            <label for="otherIndo">D'autres infos à nous communiquer à ton sujet ?</label>
            <input type="text" name="otherInfo" id="">
        </div>
        <p>En finissant de remplir ce formulaire, tu t'engages à être dispo aux dates prévues ou à nous signaler si ça change. La conv compte sur toi !</p>

        <button class="submit" type="submit">Envoyer</button>

    </form>
</main>