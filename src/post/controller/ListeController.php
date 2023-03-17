<?php

// TODO lIST
    // Afficher moins de détail=>ok
    // Au clic rediriger vers plus de détail=>ok

require_once '../database/install.php';


// Display post = findAll()
try {
    if (!isset($pdo)) {
        $error = "Oups !! Une erreur est survenue lors de la récupération des articles.";
    } else{
        $query = $pdo->prepare('SELECT * FROM posts ORDER BY `created_at` DESC');
        $query->execute();
        $posts = $query->fetchAll(PDO::FETCH_OBJ);
    }


} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups, une erreur s\'est produite lors de la récupération des articles.';
    die();
}

