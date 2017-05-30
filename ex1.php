<?php

/* 
 * Créer un tableau de chaînes de caractères
 * Concaténer chaque élément du tableau pour générer un résultat
 * Note : chaque élément est suivi d'un ;
 * Afficher le résultat
 */

/*
 * Etape 1 : initialisation des éléments
 */
// init. du tableau
$tableauDeChaines = ['Je', 'suis', 'en', 'vie'];

// J'initialise mon résultat
$concatenation = '';


/*
 * Etape 2 : Parcourir chaque élément du tableau
 */
foreach ($tableauDeChaines as $chaine) {
    // on concatène un ; après chaque élément du tableau
    $chaineAConcatener = $chaine . ';';
    // je concatène la chaîne à concaténer à mon résultat
    $concatenation .= $chaineAConcatener;
}

/*
 * Etape 3 et dernière : affichage du résultat
 */
echo $concatenation;
    


