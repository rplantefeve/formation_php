<?php

// par URI
$homepage = file_get_contents('http://semeformation.fr/');

// fichier en local
$fichier = file_get_contents(__DIR__ . './content');



// On récupère le code source d'une page Web
$lignes = file('http://www.semeformation.fr');

// boucle de parcours du tableau
// on affiche toutes les lignes ainsi que leur numéro
foreach ($lignes as $nbLigne => $ligne) {
    echo "Ligne #<b>{$nbLigne}</b> : " . htmlspecialchars($ligne) . "<br />\n";
}

foreach ($lignes as $nbLigne => $ligne) {
    echo "Ligne #<b>{$nbLigne}</b> : " . $ligne . "<br />\n";
}

// fichier en local
$lignes = file(__DIR__ . './content');
foreach ($lignes as $nbLigne => $ligne) {
    echo "Ligne #<b>{$nbLigne}</b> : " . htmlspecialchars($ligne) . "<br />\n";
}

