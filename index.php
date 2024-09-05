<?php
$_SESSION['user'] = [];


// Définit la page d'accueil
header('Location: ' . '/ctrl/welcome.php');

//How to save a password into the database
/* $pass = password_hash('test', PASSWORD_BCRYPT);
echo $pass;
 */