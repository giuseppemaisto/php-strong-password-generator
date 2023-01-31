<?php

function generatePassword($length){
    $characters = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ1234567890@.,ùàè*;';
    $password = '';
    for ($i = 0; $i < $length; $i++){
        $password .= $characters[rand(0, strlen($characters) - 1 )];
    }
    return $password;
}
?>