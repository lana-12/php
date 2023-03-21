<?php
// Démarrage de la session
session_start();

//Si user connecté => rediriger vers profil
if(isset($_SESSION['user'])){
    header("Location: profile.php");
    exit;
}
// TODOLIST 
    // revoir le try et catch
    // Faire des regex
    // controler que tous soit unique email, username
    // longueur MDP
    // deux mots de pass est identique si 

    
// Create User
    
if(!empty($_POST)){
    var_dump("Formulaire soumis");
    var_dump($_POST);
    if (
        isset($_POST['username'], $_POST['email'], $_POST['password'])
        && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])
    ) {

        $username = strip_tags($_POST['username']);

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die("L'adresse email est incorrecte");
        }

        $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);

    require_once '../database/install.php';
            // On peut passer directement le MDP car déjà hacher + roles => car json
        $sql = "INSERT INTO `users`(username, email, password, roles) VALUES (:username, :email, '$pass' , '[\"ROLE_USER\"]' )";
    
        $query = $pdo->prepare($sql);
    
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        // $query->bindValue(':password', $pass, PDO::PARAM_STR);
    
        $query->execute();

        //Récupère l'id du nouvel utilisateur pour pouvoir le rediriger sur une page précise apres inscription
        $id= $pdo->lastInsertId();

        //on connectera l'user
        // S'assurer session_start(); soit tout en haut

        $_SESSION['user'] = [
            "id" => $id,
            "name" => $username,
            "email" => $user->email,
            //Puisque c'est une inscription = user
            "roles" => ["ROLE_USER"]
        ];
        header("Location: profile.php");

    } else {
        die("le formulaire est incomplet");
    }    


}
    
    
    




// Une bonne pratique et de connecter l'utilisateur  video =34:12

