<?php




function generatePassword($length){
    //tutti i caratteri disponibili
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!&?';

    //return dei caratteri mischiati in base alla lunghezza richiesta con
    return substr(str_shuffle($str_result),
    0, $length);
};


