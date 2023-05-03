<?php
require_once '../../includes/config.php';

// Procédure
//Site : JSON Web Tokens - jwt.io

// 1.Create une header = partie rge
$header = [
    // Le type de token
    'typ'=> 'JWT',
    // Algo de scriptage = hachage
    // Plein sur le site
    'alg'=> 'HS256'
];

// 2.Create un payload = le contenu
// On y mets se qu'on veut
$payload = [
    'user_id' => '123',
    'roles'=> [
        'ROLE_USER',
        'ROLE_ADMIN'
    ],
    'email'=>'exemple@exemple.com'
];

// 3. Encoder en base64(ici methode détaillé)
// La function  = base64_encode(string) mais notre header = json
// json_encode()=> Transforme du JSON en string 
//la partie rge
$base64Header = base64_encode(json_encode($header));

//la partie violet
$base64Payload = base64_encode(json_encode($payload));

//Pour la verification du rouge
// echo $base64Header; //=> c'est celui-ci que l'on colle
// echo '<br>';

// 4.Retirer les caractères qui ne st pas valides et les remplacer
// function str_replace([A retirer],[Remplacer par ], $Qui);
//  + => -
//  / => _
// = => ''
$base64Header = str_replace(['+', '/', '='],['-', '_', ''], $base64Header );
$base64Payload = str_replace(['+', '/', '='],['-', '_', ''], $base64Payload );

//Pour la verification du violet
// echo $base64Payload; //=> c'est celui-ci que l'on colle
// echo '<br>';


// // 5.Générer une clé qui va être vérifier par notre serveur pour verifier authenticité du token
// //Create une clé privé - On peut la create avec SSL
// // Ds un file protéger mais pour l'exemple
// // includes => config.php

// // 6.Génèrer la signature

// //a.le secret encoder en base_64
$secret = base64_encode(SECRET);

//Pour vérifier => coller le secret ds Verify signature
// echo $secret;
// echo '<br>';

// //b. Génère la partie TURQUOISE 
// //hash_hmac('sha256', la partie de je dois prendre, $secret, si true = sorti binaire / si false = sortie en minuscule )
$signature = hash_hmac('sha256', $base64Header . '.' . $base64Payload, $secret, true);

// //c.On nettoie la signature
$base64Signature = base64_encode($signature);
$signature = str_replace(['+', '/', '='], ['-', '_', ''], $base64Signature);

// Pour Vérifier ON COMPARE $signature à la partie turquoise
// Elle doit être identique
// echo $signature;


// 7. On créé le token
$jwt = $base64Header . '.' . $base64Payload . '.' . $signature;

echo $jwt;
