<?php

// par URI (dans une chaîne)
$homepage = file_get_contents('http://info.cern.ch/hypertext/WWW/TheProject.html');

// fichier en local
$fichier = file_get_contents(__DIR__ . './content');


// On récupère le code source d'une page Web dans un tableau
$lignes = file('http://info.cern.ch/hypertext/WWW/TheProject.html');

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
