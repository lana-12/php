<?php

require_once '../dataBase/install.php';

// Display messagesContact = findAll()
try {
    if (!isset($pdo)) {
        $error = "Oups !! Une erreur est survenue lors de la récupération des messages.
";
    } else{
        $query = $pdo->prepare('SELECT * FROM contact ORDER BY `created_at` DESC');
        // var_dump($query);
        $query->execute();
        $contacts = $query->fetchAll(PDO::FETCH_OBJ);
    }

} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups une erreur s\'est produite';
    die();
}