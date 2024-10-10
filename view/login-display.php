<main>
    <section id="login">
        <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

        <!--          <h2 id="login-title"> Formulaire de Login</h2>
 -->
        <div id="list-warning">
            <?php if (!empty($args['session']['msg']['incorrect'])) { ?>


                <?php foreach ($args['session']['msg']['incorrect'] as $inco) { ?>
                    <p><?= $inco ?></p>
                <?php } ?>


            <?php } ?>

            <?php if (!empty($args['session']['msg']['unexisting'])) { ?>



                <?php foreach ($args['session']['msg']['unexisting'] as $unexisting) { ?>
                    <p><?= $unexisting ?></p>
                <?php } ?>


            <?php } ?>
        </div>
        <?php unset($_SESSION['msg']) ?>

        <form id="login-form" action="/ctrl/login/login.php" method="post">

            <!-- Email -->

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <!-- password -->

            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass">



            <button id="loginButton" type="submit">Connectez-vous</button>




        </form>

    </section>