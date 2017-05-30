<?php
/*
 * Etape 0 : Initialisation des paramètres de la connexion à la
 * BDD
 */
// chaîne de connexion
$dsn = 'mysql:host=127.0.0.1;dbname=cinema_crud;charset=utf8';
$username = 'userCinema';
$password = 'pwdCinema';

/*
 * Etape 1 : connexion à la BDD
 */
// je me connecte à la BDD
$link = new PDO($dsn, $username, $password);

/*
 * Etape 2 : requêtage envers la BDD
 */
$sqlSelectFilms = "SELECT * FROM film";
// on va utiliser la méthode query() de l'objet $link de classe PDO
// pour lancer une requête vers la BDD
// afin d'obtenir un résultat
$result = $link->query($sqlSelectFilms);

/*
 * Etape 3 : exploitation des résultats
 */

/*
 * Etape 3.1 : conversion des résutats en données exploitables, c.-à-d. en
 * objet (ou autres : tableau associatif, ...)
 */

// je dis au $result que nous allons utiliser le set fetchMode
// donc que nous allons utiliser les résultats en tant qu'objet
$result->setFetchMode(PDO::FETCH_OBJ);

// je récupère les lignes de mon tableau de résultat
// au sein d'une boucle
while ($filmObj = $result->fetch()) {
    // chaque ligne de mon tableauDeFilms devient la ligne extraite des
    // résultats
    $tableauDeFilms[] = $filmObj;
}

?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" href="css/cinema.css" rel="stylesheet"/>
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
             * Etape 3.2 : Affichage, exploitation des données
             * => Parcours du tableau
             */

            // je parcours le tableau des films
            foreach ($tableauDeFilms as $film) {
                ?>
                <tr style="border: 1px solid black;">
                    <td><?= $film->FILMID ?></td>
                    <td><?= $film->TITRE ?></td>
                    <td><?= $film->TITREORIGINAL ?></td>                    
                </tr>
                <?php
            } // fin de la boucle de parcours des infos sur un film
            ?>
        </table>

    </body>
</html>
