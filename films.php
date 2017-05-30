<?php

/*
 * Etape 1 : Initialisation du tableau (au moins 3 films)
 */
// un film est un tableau associatif qui contient les éléments suivants :
//- un titre
//- une durée
//- un réalisateur
//- un genre
//- une note
// la liste de film est un tableau standard (avec index de type int)
$tableauDeFilms = array();
// chaque élément du tableauDeFilms est un film <=> tableau associatif
$tableauDeFilms[] = array(
    'titre' => 'V pour Vendetta',
    'duree' => 120,
    'realisateur' => 'James MacTeigue',
    'genre' => 'SF',
    'note' => 3.9);
$tableauDeFilms[] = array(
    'titre' => 'Matrix',
    'duree' => 125,
    'realisateur' => 'Wachowski sisters',
    'genre' => 'SF',
    'note' => 4.9);
$tableauDeFilms[] = array(
    'titre' => 'La vie rêvée de Walter Mitty ',
    'duree' => 100,
    'realisateur' => 'Ben Stiller',
    'genre' => 'Comédie / Aventure',
    'note' => 4.6);

/*
 * Etape 2 : Parcours du tableau
 */

// je parcours le tableau des films
foreach ($tableauDeFilms as $film) {
    // je parcours le tableau associatif $film
    foreach ($film as $key => $value) {
        // je conditionne l'affichage
        // ssi la durée est supérieure ou égale à 120
        if($film['duree'] >= 120 && $film['genre'] == 'SF' && $film['note'] > 4) {
            echo "$key : $value<br>";
        } // fin du if
    } // fin de la boucle de parcours des infos sur un film
}// fin de la boucle de parcours des films

echo 'YOLO';