<?php
function passwordGenerator($passLength)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!<|\>$%&/()=&@#.,-';
    $allCharacters = $alphabet . $numbers . $symbols;
    $password = substr(str_shuffle($allCharacters), 0, $passLength);
    return $password;
}
