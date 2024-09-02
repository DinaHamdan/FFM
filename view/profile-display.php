<main>

    <form id="profile-form" action="/ctrl/profile/create-profile.php" method="post" enctype="multipart/form-data">

        <!-- First Name -->
        <div>
            <label for="lastName">Nom : </label>
            <input type="text" name="lastName" id="lname" value="<?= $args['session']['memberInfo']['lastName'] ?>">
        </div>
        <!-- Last Name -->

        <div>
            <label for="firstName">Prénom : </label>
            <input type="text" name="firstName" id="fname" value="<?= $args['session']['memberInfo']['firstName'] ?>">
        </div>


        <!-- Phone Number-->
        <div>
            <label for="phoneNumber">Numéro de téléphone</label>
            <input type="text" id="phoneNumber" name="phoneNumber" value="<?= $args['session']['memberInfo']['phoneNumber'] ?>">
        </div>
        <!-- Profile photo-->

        <div>
            <label for="avatar">Ton Avatar</label>
            <input type="file" id="file" name="avatar">
        </div>


        <button class="submit" type="submit">Valider</button>

        <a href="/ctrl/profile/update-pass-display.php">Changer mot de passe</a>
    </form>


</main>