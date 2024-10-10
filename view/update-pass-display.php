<main>
    <section id="update-password">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>


        <form id="update-pass-form" action="/ctrl/profile/update-pass.php" method="post">

            <!-- password -->

            <label for="pass">Nouveau mot de passe</label>
            <input type="password" name="pass">



            <button id="update-pass-button" type="submit">Modifier</button>




        </form>
    </section>