<?php
// On démarre la session
session_start();

//TODOLIST
    //Résoudre le probleme display du title => ok
    // Revoir le message si messageContact existe pas


require_once '../dataBase/install.php';


// Display One MessageContact = findBy()

try {
    if (!isset($pdo)) {
        $error = "Oups !! Une erreur est survenue lors de la récupération du message.";
    } 
    //On vérifie si on a un id
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        header("Location: list.php");
        exit;
    }
        
    //Si id existe
    $id = $_GET["id"];
    $sql = "SELECT * FROM `contact` WHERE `id` = :id";

    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);

    $query->execute();
    $contact = $query->fetch();
    
    //Si pas de message
    if(!$contact){
        // si pas message => error 404
        http_response_code(404);
        echo "Message inexistant";
        // header("Location: list.php");
        exit;
    }


    
} catch (PDOException $e) {
    $error = $e->getMessage();
        // Revoir le message si messageContact existe pas
    echo 'Oups une erreur s\'est produite';
    die();
}
