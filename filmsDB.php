<?php
/*
 * Etape 0.1 : connexion à la BDD
 */
// je me connecte à la BDD
$link = mysqli_connect("127.0.0.1", "userCinema", "pwdCinema", "cinema_crud");

// si le lien ne s'est pas fait
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*
 * Etape 0.2 : requêtage envers la BDD
 */
$sqlSelectFilms = "SELECT * FROM film"; 
$result = mysqli_query($link, $sqlSelectFilms);

/*
 * Etape 0.3 : exploitation des résultats
 */
// je récupère les lignes de mon tableau de résultat
// au sein d'une boucle
while($row = mysqli_fetch_row($result)){
    // chaque ligne de mon tableauDeFilms devient la ligne extraite des
    // résultats
    $tableauDeFilms[] = $row;
}

/*
 * Etape 1 : Initialisation du tableau (au moins 3 films)
 */



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