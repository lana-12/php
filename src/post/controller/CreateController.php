<?php
//

//TODOLIST
// Change la redirection une fois créé => mise en place d'une alert pour success ou error =>ok

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../user/login.php");
    exit;
}

require_once '../database/install.php';


// Create post
try {
    if(!isset($pdo)){
        $error= " Problème de connexion, Veuillez esssayer ultèrieurement !!";
    }

    if (isset($_POST['title'], $_POST['author'], $_POST['content'])) {

        $query = $pdo->prepare('INSERT INTO `posts` (title, author, content) VALUE (:title, :author, :content)');

        //Premiere methodes en protégeant la request
        $query->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
        $query->bindValue(':author', $_POST['author'], PDO::PARAM_STR);
        $query->bindValue(':content', $_POST['content'], PDO::PARAM_STR);

        //Deuxième méthodes
        // $query->execute([
        // 	'title' => $_POST['title'],
        // 	'author' => $_POST['author'],
        // 	'content' => $_POST['content'],
        // ]);
        $query->execute();
        //A revoir car bloque la navBar
        $success = 'Votre article a bien été enregisté';

        //CHANGER LA REDIRECTION PEUT-ETRE view post ???
        // header('Location: ./create.php');
        // exit;
    }
    // }
} catch (PDOException $e) {
    // $error = $e->getMessage();
    $error = 'Oups une erreur s\'est produite';
    die();
}
