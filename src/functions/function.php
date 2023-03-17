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
 * function formaté la date en français, affiche uniquement le jour de la création
 * params = created_At de l'object
 */
function dateFormat($date){
    return date("d/m/Y", strtotime($date));
}


function isPair(int $nbr){
    echo $nbr . ' ' .($nbr %2 === 0 ? ' est pair' : ' est impair').'<br>';
}