<?php
// On démarre la session
session_start();


require_once '../database/install.php';


// Delete POST 

try {
    if (!isset($pdo)) {
        $error = "Oups !! Une erreur est survenue lors de la récupération du message.";
    }
    // On vérifie si on a un id
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        header("Location: list.php");
        exit;
    }

    //Si id existe
    $id = $_GET["id"];
    $sql = "DELETE FROM `posts` WHERE `id` = :id";

    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);

    $query->execute();

    $success = "L'article a bien été supprimé.";
    // header('Location: list.php');
    // exit;

    
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups une erreur s\'est produite pour supp';
    die();
}
