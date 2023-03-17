<?php

require_once '../dataBase/install.php';

//mettre les message error success ds une div alerte

// Create message contact
try {
    if(!isset($pdo)){
        $error= " Problème de connexion, Veuillez esssayer ultèrieurement !!";
    }

    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

        $query = $pdo->prepare('INSERT INTO contact (name, email, message) VALUE (:name, :email, :message)');
        // var_dump($query);
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
        echo $success = 'Message bien envoyé';

        //CHANGER LA REDIRECTION PEUT-ETRE ACCUEIL ???
        header('Location: ./create.php');
        exit();
    }
    // }
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups une erreur s\'est produite';
    die();
}
