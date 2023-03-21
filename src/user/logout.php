<?php

//Ouvre la session
session_start();
//Si aucun user connecté => rediriger vers connexion
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}


//On supp la session['user']
unset($_SESSION['user']);

// Redirection
header("Location: ../../index.php");