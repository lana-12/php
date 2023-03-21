<?php
// On démarre la session
session_start();

//Si user connecté => rediriger vers profil
if (isset($_SESSION['user'])) {
    header("Location: profile.php");
    exit;
}

if (!empty($_POST)) {
    //Le formulaire a été envoyé
    //On verifie si tous les champs soit remplis

    if (
        isset($_POST['email'], $_POST['password'])
        && !empty($_POST['email'] && !empty($_POST['password']))
    ) {
        // Si email est un email
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die("L'adresse email est incorrecte");
        }

        // On se connect à la base de données
        require_once '../database/install.php';

        $sql = "SELECT * FROM `users` WHERE `email` = :email";

        $query = $pdo->prepare($sql);
        $query->bindValue(":email", $_POST['email'], PDO::PARAM_STR);

        $query->execute();
        $user = $query->fetch();
        // var_dump($user);die;

        // 1. On vérifie si user existe

        //User n'existe pas
        if (!$user) {
            // ATTENTION NE JAMAIS METTRE CETTE PHRASE - PAS D'INDICE
            // die("L'utilisateur n'existe pas ");
            // MAIS PLUTOT CELLE-CI
            die("L'utilisateur et/ou le mot de passe est incorrect ");
        }

        // 2. User existe on Verifie son MDP
        //User existe 
        // On vérifie son MDP => password_verify() renvoi un bool
        // var_dump(password_verify($_POST['password'], $user->password));
        if (!password_verify($_POST['password'], $user->password)) {
            die("L'utilisateur et/ou le mot de passe est incorrect ");
        }

        // 3. Ici USER et le MDP sont corrects
        // On va connecté le USER


        //Démarre la session php - la session est un array
        // S'assurer session_start(); soit tout en haut


        //Stocker dans $_SESSION les info de l'utilisateur
        // Ne pas mettre des données sensibles
        $_SESSION['user'] = [
            "id" => $user->id,
            "name" => $user->username,
            "email" => $user->email,
            "roles" => $user->roles
        ];
        // Pour accéder aux valeur 
        var_dump($_SESSION['user']['name']);

        // On peut rediriger user vers sa page de profil ou autre 
        //Location envoit vers ...
        // Attention pas d espace entre Location et :
        header("Location: profile.php");
    }
}
