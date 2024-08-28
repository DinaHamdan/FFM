<main>
    <section id="login">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <h2 id="login-title"> Formulaire de Login</h2>
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <form id="login-form" action="/ctrl/login/login.php" method="post">

            <!-- Email -->

            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            </div>

            <!-- password -->

            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass">



            <button id="loginButton" type="submit">Connect</button>




        </form>

    </section>
</main>