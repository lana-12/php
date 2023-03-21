<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: profile.php");
    exit;
}

if (!empty($_POST)) {

    if (
        isset($_POST['email'], $_POST['password'])
        && !empty($_POST['email'] && !empty($_POST['password']))
    ) {

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die("L'adresse email est incorrecte");
        }

        require_once '../database/install.php';

        $sql = "SELECT * FROM `users` WHERE `email` = :email";

        $query = $pdo->prepare($sql);
        $query->bindValue(":email", $_POST['email'], PDO::PARAM_STR);

        $query->execute();
        $user = $query->fetch();

    // Vérification

        if (!$user) {
            die("L'utilisateur et/ou le mot de passe est incorrect ");
        }

        if (!password_verify($_POST['password'], $user->password)) {
            die("L'utilisateur et/ou le mot de passe est incorrect ");
        }

// S'assurer session_start(); soit tout en haut

    $_SESSION['user'] = [
        "id" => $user->id,
        "name" => $user->username,
        "email" => $user->email,
        "roles" => $user->roles
    ];

    header("Location: profile.php");

    }
    
}
