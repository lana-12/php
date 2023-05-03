<?php
require_once '../../includes/config.php';
require_once './JWT.php';

// Normalement on le recoit via une api
const TOKEN = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiMTIzNDU2Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9BRE1JTiJdLCJlbWFpbCI6ImV4ZW1wbGVAZXhlbXBsZS5jb20iLCJpYXQiOjE2ODMxMjA5NzcsImV4cCI6MTY4MzEyMTAzN30.R71VzmyJ6hQdnrxGXy1pi9TSf_aTjl3ULUZGxAD5jFU';


$jwt = new JWT();

// Aller sur localhost et mettre .php 
//=> exemple http://localhost:8000/src/jwt/decodeToken.php

var_dump($jwt->getHeader(TOKEN));
// Display =>array(2) { ["typ"]=> string(3) "JWT" ["alg"]=> string(5) "HS256" } 

var_dump($jwt->getPayload(TOKEN));
// Display =>array(5) { ["user_id"]=> string(6) "123456" ["roles"]=> array(2) { [0]=> string(9) "ROLE_USER" [1]=> string(10) "ROLE_ADMIN" } ["email"]=> string(19) "exemple@exemple.com" ["iat"]=> int(1683119309) ["exp"]=> int(1683205709) }  


var_dump($jwt->check(TOKEN, SECRET));
// Display => bool(true) 


var_dump($jwt->isExpired(TOKEN));
// Display => bool(false) => tjs valide 
// Display => bool(true) => plus valide


var_dump($jwt->isValid(TOKEN));
// Display => bool(true) => la chaîne(regex) est bonne 
// Display => bool(false) => N'est pas bonne

