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
$enTetes = ['titre', 'duree', 'realisateur', 'genre', 'note'];
// chaque élément du tableauDeFilms est un film <=> tableau associatif
$tableauDeFilms[] = array(
    "$enTetes[0]" => 'V pour Vendetta',
    "$enTetes[1]" => 120,
    "$enTetes[2]" => 'James MacTeigue',
    "$enTetes[3]" => 'SF',
    "$enTetes[4]" => 3.9);
$tableauDeFilms[] = array(
    "$enTetes[0]" => 'Matrix',
    "$enTetes[1]" => 125,
    "$enTetes[2]" => 'Wachowski sisters',
    "$enTetes[3]" => 'SF',
    "$enTetes[4]" => 4.9);
$tableauDeFilms[] = array(
    "$enTetes[0]" => 'La vie rêvée de Walter Mitty ',
    "$enTetes[1]" => 100,
    "$enTetes[2]" => 'Ben Stiller',
    "$enTetes[3]" => 'Comédie / Aventure',
    "$enTetes[4]" => 4.6);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/cinema.css">
        <title></title>
    </head>
    <body>
        <table class="std">
            <tr>
                <th><?= $enTetes[0] ?></th>
                <th><?= $enTetes[1] ?></th>
                <th><?= $enTetes[2] ?></th>
                <th><?= $enTetes[3] ?></th>
                <th><?= $enTetes[4] ?></th>
            </tr>
            <?php
            /*
             * Etape 2 : Parcours du tableau
             */

            // je parcours le tableau des films
            foreach ($tableauDeFilms as $film) {
                ?>
                <tr>
                    <td><?= $film["$enTetes[0]"] ?></td>
                    <td><?= $film["$enTetes[1]"] ?></td>
                    <td><?= $film["$enTetes[2]"] ?></td>                    
                    <td><?= $film["$enTetes[3]"] ?></td>
                    <td><?= $film["$enTetes[4]"] ?></td>
                </tr>
                <?php
            } // fin de la boucle de parcours des infos sur un film
            ?>
        </table>

    </body>
</html>
