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
                <th>Titre</th>
                <th>Durée</th>
                <th>Réalisateur</th>
                <th>Genre</th>
                <th>Note</th>
                <th>Commentaire</th>
            </tr>
            <?php
            /*
             * Etape 2 : Parcours du tableau
             */

            // je parcours le tableau des films
            foreach ($tableauDeFilms as $film) {
                ?>
                <tr>
                    <td><?php echo $film['titre']; ?></td>
                    <td><?= $film['duree'] ?></td>
                    <td><?= $film['realisateur'] ?></td>                    
                    <td><?= $film['genre'] ?></td>
                    <td><?= $film['note'] ?></td>
                </tr>
                <?php
            } // fin de la boucle de parcours des infos sur un film
            ?>
        </table>

    </body>
</html>
