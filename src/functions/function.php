<?php

function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

/**
 * Function get the first 10 words of the message
 * params= message
 */
function getWord($text, $nbWord)
{
    // $nbWord = 10;
    $arrayWord = explode(' ', $text, $nbWord + 1);
    unset($arrayWord[$nbWord]);
    echo implode(' ', $arrayWord) . ' ...';
}

/**
 * function pour formater la date en français, affiche uniquement le jour de la création
 * params = created_At de l'objet
 */
function dateFormat($date){
    return date("d/m/Y", strtotime($date));
}


