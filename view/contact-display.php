<main>
    <h1 id="contactTitle"> Formulaire de Contact</h1>
    <form id="contact-form" action="/ctrl/contact/contact.php" method="post">

        <!-- Last Name -->
        <div id="nameContainer">
            <label for="visitorLastName">Nom : </label>
            <label for="visitorFirstName">Prénom : </label>
            <input type="text" name="visitorLastName" id="visitorLastName" required>
            <!-- First Name -->
            <input type="text" id="visitorFirstName" name="visitorFirstName" required>
        </div>
        </div>
        <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
        <div id="emailPhoneContainer">

            <label for="visitorEmail">Email : </label>
            <label for="visitorPhoneNumber">Téléphone : </label>

            <input type="email" name="visitorEmail" id="visitorEmail" required>
            <!-- Phone Number that must be in the following order: 09-09-09-09-09- pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" -->
            <input type="tel" name="visitorPhoneNumber" id="visitorPhoneNumber" required>

        </div>
        <div id="messageContainer">
            <!-- Type of contact message -->
            <select name="questionType" id="questionChoice">
                <option value="Devis">Demande de devis</option>
                <option value="Question">Autre Question</option>
            </select>
            <textarea name="contactMessage" id="contactMessage" placeholder="Ton message"></textarea>
        </div>
        <button id="validateContact" class="submit" type="submit">Valider</button>

    </form>
</main>