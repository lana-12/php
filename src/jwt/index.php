<?php
require_once '../../includes/config.php';
require_once './JWT.php';
// Procédure
//Site : JSON Web Tokens - jwt.io

// 1.Create une header = partie rge
$header = [
    // Le type de token
    'typ' => 'JWT',
    // Algo de scriptage = hachage
    // Plein sur le site
    'alg' => 'HS256'
];

// 2.Create un payload = le contenu
// On y mets se qu'on veut
$payload = [
    'user_id' => '123456',
    'roles' => [
        'ROLE_USER',
        'ROLE_ADMIN'
    ],
    'email' => 'exemple@exemple.com'
];

$jwt = new JWT();
$token = $jwt->generate($header, $payload, SECRET);

echo $token;


