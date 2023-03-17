<?php

require_once '../dataBase/install.php';

//mettre les message error success ds une div alerte


// Display messages contact
try {
    if (isset($pdo)) {
        $query = $pdo->prepare('SELECT * FROM `posts` ORDER BY `created_at` DESC');
        $query->execute();
        $posts = $query->fetchAll();
        // var_dump($posts);
        
    }
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups une erreur s\'est produite';
    die();
}

