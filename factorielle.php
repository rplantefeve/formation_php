<?php

/*
 * Ecrire une fonction factorielle10 qui renvoie la valeur de 
 * 10! avec une variable statique (pas de paramètre en entrée)
 */

function factorielle10() {
    static $var = 10;

    // instructions...
    if ($var > 1) {
        $new = $var--;
        return factorielle10() * $new;
        ;
    }
    return 1;
}

$res = 1;
$res = factorielle10();
echo $res;