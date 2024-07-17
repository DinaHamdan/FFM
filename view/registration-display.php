<main>

    <form id="inscription-form" action="/ctrl/registration/registration.php" method="post">

        <!-- Email  that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
         pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"-->
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>


        <!-- Password Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
        <div>
            <label for="pass">Password</label>
            <input type="password" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="pass" name="pass" required>
        </div>


        <button class="submit" type="submit">Validate</button>
    </form>


</main>