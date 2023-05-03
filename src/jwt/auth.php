<?php

// Ce file ne sera accessible uniquement depuis une api par Ajax et en post
//Procéder aux Vérifications et tjs répondre en json

//Permet d'utiliser Ajax sur un serveur
// on peut remplacer * par une url ou autre
header('Access-Control-Allow-Origin: *');


//Renvoie du json
header('Content-type: application/json');

// On interdit tte methode qui n'est pas POST 
//Vérifie si la méthode utilisé pour accéder au fichier est POST et arrete le traitement si != post
//Trouver une méthode plus propre
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    //Pas le droit
    http_response_code(405);

    // Return une response en json sous forme de Array
    echo json_encode(['message'=> 'Méthode non autorisée']);

    exit;
}

//Dans Postman aller dans Authorization => type = Bearer Token => coller le token

//On vérifier si on reçoit un token
if (isset($_SERVER['Authorization'])) {
    $token = trim($_SERVER['Authorization']);
} elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    $token = trim($_SERVER['HTTP_AUTHORIZATION']);
} elseif (function_exists('apache_request_headers')) {
    $requestHeaders = apache_response_headers();
    if (isset($requestHeaders['Authorization'])) {
        $token = trim($requestHeaders['Authorization']);
    }
}


//Vérifie si on récupère un token d'authentification
if(!isset($token) || !preg_match('/Bearer\s(\S+)/', $token, $matches)){
    http_response_code(400);
    echo json_encode(['message'=> 'Token introuvable']);
    exit;
}
// echo $token;

//On extrait le token
$token = str_replace('Bearer ', '', $token);
require_once '../../includes/config.php';
require_once './JWT.php';

$jwt = new JWT();

//Vérifie la validité
if(!$jwt->isValid($token)){
    http_response_code(400);
    echo json_encode(['message' => 'Token invalide']);
    exit;
}
// Vérification de la signature
if (!$jwt->check($token, SECRET)) {
    http_response_code(403);
    echo json_encode(['message' => 'Token est invalide']);
    exit;
}


//Vérification de l'expiration
if ($jwt->isExpired($token)) {
    http_response_code(403);
    echo json_encode(['message' => 'Token a expiré']);
    exit;
}

// On peut vérifier si on récupère bien le payload
echo json_encode($jwt->getPayload($token));
