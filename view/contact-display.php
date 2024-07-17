<main>
    <form id="contact-form" action="/ctrl/contact/contact.php" method="post">



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
        <!-- Type of contact message -->
        <select name="questionType" id="">
            <option value="Devis">Demande de devis</option>
            <option value="Question">Autre Question</option>
        </select>
        <textarea name="contactMessage" id="contactMessage" placeholder="Ton message"></textarea>

        <button class="submit" type="submit">Envoyer</button>




    </form>
</main>