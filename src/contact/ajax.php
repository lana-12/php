<?php
require_once '../dataBase/install.php';

// $lien = $_GET['id'];
// echo $_GET['id'];
// echo "test";

// function ajax($pdo){
//     $query = $pdo->prepare('SELECT * FROM contact');
//     // var_dump($query);
//     $query->execute();
//     $contacts = $query->fetchAll(PDO::FETCH_OBJ);
//     return $contacts;
//     // echo '<pre>';
//     // var_dump($contacts) ;
//     // echo '</pre>';
// }
// ajax($pdo);

// Ca marche mais pas ca encore
function section($pdo){
    // echo "coucou";
    $query = $pdo->prepare('SELECT * FROM contact');
    // var_dump($query);
    $query->execute();
    //je recupere tout les messages
    $contacts = $query->fetchAll();
    //je recupere  message
    // $contacts = $query->fetch();
    // $section[] = $contacts;
    // echo '<pre>';
    // var_dump($contacts) ;
    // echo '</pre>';
    return $contacts;
}
section($pdo);

var_dump(section($pdo));







?>



