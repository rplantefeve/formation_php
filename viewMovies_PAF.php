<?php
//Exo2:
// Etape 1 : Création du tableau de tableaux de films
//
// Etape 1-1 : On commence par les titres des colonnes du tableau général

$tabColonnes = ['Titre', 'Titre original', 'Duree']; // Etape 1-2 : On crée un tableau par film

$tabLBV = ["{$tabColonnes[0]}" => 'La belle verte',
    "{$tabColonnes[1]}" => '-',
    "{$tabColonnes[2]}" => '90'];

$tabMatrix = ["{$tabColonnes[0]}" => 'Matrix',
    "{$tabColonnes[1]}" => 'The Matrix',
    "{$tabColonnes[2]}" => '135'];

$tabVendetta = ["{$tabColonnes[0]}" => 'V pour Vendetta',
    "{$tabColonnes[1]}" => 'V for Vendetta',
    "{$tabColonnes[2]}" => '120']; // Etape 1-3 : Creation du tableau de tableaux

$tabFilms = [$tabLBV, $tabMatrix, $tabVendetta];
// Etape 2 : On rassemble les éléments du tableau dans une variable codeHTML,
// qui sera ensuite affichée directement dans le html
//
// Etape 2-1 : Code html pour les titres du tableau

$codeHTML = "<table class='std'> <tr> <th> {$tabColonnes[0]} </th> <th> {$tabColonnes[1]} </th> <th> {$tabColonnes[2]} </th> </tr>"; // Etape 2-2 : Code html pour le reste du tableau

foreach ($tabFilms as $films) {

    $codeHTML .= "<tr>";

    foreach ($films as $detailsFilms) {

        $codeHTML .= "<td> $detailsFilms </td>";
    }

    $codeHTML .= "</tr>";
}

$codeHTML .= "</table>"; // consigne : afficher Ã§a joli avec du CSS/html
?>
<!DOCTYPE html>

<html lang="en">



    <head>

        <meta charset="UTF-8">

        <title>Exo </title>

        <!--Pour ma version de dÃ©part :-->

        <link rel="stylesheet" type="text/css" href="css/cinema.css">

    </head><body>

        <?php
        echo $codeHTML;
        ?>

    </body></html>