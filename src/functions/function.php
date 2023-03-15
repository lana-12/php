<?php


function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}




function isPair(int $nbr){
    echo $nbr . ' ' .($nbr %2 === 0 ? ' est pair' : ' est impair').'<br>';
}