<main>
    <section id="login">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>


        <form id="update-pass-form" action="/ctrl/profile/update-pass.php" method="post">

            <!-- Email -->

            <label for="email">Email</label>
            <input type="text" name="email">


            <!-- password -->

            <label for="pass">Password</label>
            <input type="password" name="pass">



            <button id="update-pass-button" type="submit">Modifier</button>




        </form>
    </section>
</main>