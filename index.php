<?php


$films[] = array(
    'titre' => 'V pour Vendetta',
    'duree' => 121,
    'realisateur' => 'James MacTeigue',
    'genre' => 'SF',
    'note' => 4.5);
    
$films[] = array(
    'titre' => 'Matrix',
    'duree' => 125,
    'realisateur' => 'Les soeurs Wachovski',
    'genre' => 'SF',
    'note' => 4.6);
    
$films[] = array(
    'titre' => 'L\'arnacoeur',
    'duree' => 90,
    'realisateur' => 'Un français',
    'genre' => 'comédie',
    'note' => 3.9);

foreach ($films as $film) {
    if($film['note'] > 4)
    {
        echo  $film['titre'];
    }
    
}

