<main>
    <section id="registration">
        <h1 class="register-title" id="page-title"><?= $args['pageTitle'] ?></h1>

        <form id="registration-form" action="/ctrl/registration/registration.php" method="post">

            <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->

            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>



            <!-- Password Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->

            <label for="pass">Password</label>
            <input type="password" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="pass" name="pass" required>



            <button id="registerButton" type="submit">Valider</button>
        </form>


</main>