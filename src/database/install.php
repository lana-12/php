<?php
// instance de la Base de données
$error = null;
$success = null;
//connexion ok pour page contact
try{
    $mysql ='mysql:host=localhost';
	// $pdo= new PDO($mysql, 'root','');
    $pdo = new PDO('mysql:host=localhost;dbname=php_projet', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // [
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    // ]

} catch (PDOException $e){
    
    $error = $e->getMessage();
    file_put_contents('dblog.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
    // Attention à afficher que pour le debug
	echo $error;
	echo "Oups erreur de connexion";
}
