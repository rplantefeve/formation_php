<?php



// j'initialise mon tableau associatif
$tableau = array(); // cette ligne est facultative
$tableau['titre'] = 'Matrix';
$tableau['realisateur'] = 'Wachowski sisters';
$tableau['duree'] = 120;

// je parcours les éléments de mon tableau
foreach ($tableau as $key => $value) {
    // j'affiche pour chaque élément, le couple clé, valeur
    echo "$key : $value";
    echo '<br>';
}

