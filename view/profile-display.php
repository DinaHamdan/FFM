<main>
    <section id="profile">
        <h1 id="profile-title"><?= $args['pageTitle'] ?></h1>

        <form id="profile-form" action="/profile/create-profile" method="post" enctype="multipart/form-data">

            <!-- First Name -->

            <label for="lastName">Nom </label>
            <input type="text" name="lastName" id="lname" value="<?= $args['session']['memberInfo']['lastName'] ?>">

            <!-- Last Name -->


            <label for="firstName">Prénom </label>
            <input type="text" name="firstName" id="fname" value="<?= $args['session']['memberInfo']['firstName'] ?>">



            <!-- Phone Number-->

            <label for="phoneNumber">Numéro de téléphone</label>
            <input type="text" id="phoneNumber" name="phoneNumber" value="<?= $args['session']['memberInfo']['phoneNumber'] ?>">

            <!-- Profile photo-->


            <label for="avatar">Ton Avatar</label>
            <input type="file" id="file" name="avatar">



            <button class="submit" type="submit">Valider</button>

            <a href="/profile/update-pass-display">Changer mot de passe</a>
        </form>

    </section>