<?php
//TODOLIST
// A FAIRE

require_once '../database/install.php';
// require_once './controller/ViewController.php';


// Create post
try {
    if (!isset($pdo)) {
        $error = " Problème de connexion, Veuillez esssayer ultèrieurement !!";
    }
    $id = $_GET['id'];

    if (isset($_POST['title'],$_POST['author'],$_POST['content'],)){
        $query = $pdo->prepare('UPDATE posts SET title = :title, author = :author, content = :content WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
        $query->bindValue(':author', $_POST['author'], PDO::PARAM_STR);
        $query->bindValue(':content', $_POST['content'], PDO::PARAM_STR);

        $query->execute();
        
        $success = "L'article a bien été modifié.";
    }
    $query = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetch();
    
   

    
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo 'Oups une erreur s\'est produite';
    die();
}
