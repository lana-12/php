<?php
// instance de la Base de données

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "php_projet");

$error = null;
$success = null;
//connexion ok pour page contact
try{
    //Methode avec les const
    $dsn = "mysql:dbname=". DBNAME. ";host=" . DBHOST;
    $pdo = new PDO($dsn, DBUSER, DBPASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    // Définir le charset à utf8
    $pdo->exec(("SET NAMES utf8"));

    //Définir la méthode de fetch
    // $pdo->setAttribute(
    //     // PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ
    // );

    // Autre methode
    // $pdo = new PDO('mysql:host=localhost;dbname=php_projet', 'root', '');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e){
    
    $error = $e->getMessage();
    file_put_contents('dblog.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
    // Attention à afficher que pour le debug
	echo $error;
	echo "Oups erreur de connexion";
}
