<?php
/*
 * Etape 1 : connexion à la BDD
 */
// je me connecte à la BDD
$link = mysqli_connect("p:127.0.0.1", "userCinema", "pwdCinema", "cinema_crud");

// si le lien ne s'est pas fait
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*
 * Etape 2 : requêtage envers la BDD
 */
$sqlSelectFilms = "SELECT * FROM film"; 
$result = mysqli_query($link, $sqlSelectFilms);

/*
 * Etape 3 : exploitation des résultats
 */
// je récupère les lignes de mon tableau de résultat
// au sein d'une boucle
while($row = mysqli_fetch_assoc($result)){
    // chaque ligne de mon tableauDeFilms devient la ligne extraite des
    // résultats
    $tableauDeFilms[] = $row;
}

/*
 * Etape 4 : Je libère les résultats
 */
mysqli_free_result($result);

/*
 * Etape 5 : Je ferme la connexion
 */
//mysqli_close($link);


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/cinema.css">
    </head>
    <body>
        <table class="std">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Titre original</th>
            </tr>
            <?php
            /*
             * Etape 2 : Parcours du tableau
             */

            // je parcours le tableau des films
            foreach ($tableauDeFilms as $film) {
                ?>
                <tr>
                    <td><?= $film['FILMID'] ?></td>
                    <td><?= $film['TITRE'] ?></td>
                    <td><?= $film['TITREORIGINAL'] ?></td>                    
                </tr>
                <?php
            } // fin de la boucle de parcours des infos sur un film
            ?>
        </table>

    </body>
</html>
