<?php
// On démarre la session
session_start();

// Séparation ok - 17/03/23

// TODO lIST
    //CHANGER LA REDIRECTION PEUT-ETRE ACCUEIL OU LIST ???
    //Si j enleve le header, le message $success display mais bloque la navBar ???

require_once '../database/install.php';


// Create message contact
try {
    if(!isset($pdo)){
        $error= " Problème de connexion, Veuillez esssayer ultèrieurement !!";
    }

    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

        $query = $pdo->prepare('INSERT INTO contact (name, email, message) VALUE (:name, :email, :message)');

        //Premiere methodes en protégeant la request
        $query->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $query->bindValue(':message', $_POST['message'], PDO::PARAM_STR);

        //Deuxième méthodes
        // $query->execute([
        // 	'name' => $_POST['name'],
        // 	'email' => $_POST['email'],
        // 	'message' => $_POST['message'],
        // ]);
        $query->execute();

        //A revoir car bloque la navBar
        $success = 'Message bien envoyé';

        //CHANGER LA REDIRECTION PEUT-ETRE ACCUEIL OU LIST ???
        // header('Location: ./create.php');
        // exit;
    }
    // }
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups une erreur s\'est produite';
    die();
}
