<?php

$message = 'hello';

// Pas de "use"
$example = function () {
    var_dump($message);
};
$example();

// Hérite $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// La valeur de la variable héritée est définie lors que la fonction est 
// définie non quand elle est appelée
$message = 'world';
$example();

// Réinitialisation de la variable message
$message = 'hello';

// Héritage par référence
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// Le changement de valeur dans le contexte parent est reflété lors de 
// l'appel de la fonction.
$message = 'world';
$example();

// Les fonctions anonymes peuvent accepter des arguments classiques
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");
