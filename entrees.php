<?php
/*
 * Traitements de formulaires
 */
// tester si la variable est initialisée
if (isset($_POST['nombre'])) {
    // si oui, je l'affiche. Je l'affiche que si elle existe
    echo $_POST['nombre'];
}
// sinon, la variable n'est pas initialisée
else {
    // je l'initialise à vide
    $_POST['nombre'] = '';
}

/*
 * Initialisations
 */
// initialiser le nombre d'entrées à 2500
$nbEntrees = 2500;

accueillirPersonnes($_POST['nombre']);

// définir le nombre de personnes des 3 groupes de clients
// qui rentrent dans le cinéma
// un groupe de 10 personnes
define('GROUPE1', 10);
// un groupe de 25 personnes
define('GROUPE2', 25);
// un dernier de 2 personnes
define('GROUPE3', 2);

// définition de la fonction qui simule l'entrée d'un nombre 
// de personnes
// Cette fonction va ajouter au nombre d'entrées initial,
// le nombre de personnes qui sont accueillies
function accueillirPersonnes($nbPersonnesAccueillies) {
    // je récupère la variable globale qui représente le nombre d'entrées
    // à un instant t
    global $nbEntrees;
    // j'ajoute au nombre d'entrées initial les personnes accueillies
    $nbEntrees += $nbPersonnesAccueillies;
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="entrees.php" method="post">
            <input type="text" name="nombre">
            <input type="submit" value="OK">
            <input type="hidden" value="<?= $nbEntrees ?>">
        </form>
        <?php
        /*
         * Traitements
         */
        echo 'Nombre d\'entrées dans le cinéma : ' . $nbEntrees;
        // on simule l'entrée des 3 groupes successivement
        // je vais appeler 3x la fonction
        // une fois pour le premier groupe
//        accueillirPersonnes(GROUPE1);
//        echo 'Après premier passage = ' . $nbEntrees . '<br>';
//        // une deuxième pour le deuxième groupe
//        accueillirPersonnes(GROUPE2);
//        echo 'Après deuxième passage = ' . $nbEntrees . '<br>';
//        // une dernière fois pour le dernier groupe
//        accueillirPersonnes(GROUPE3);
//        echo 'Après troisième passage = ' . $nbEntrees . '<br>';
        // Attention  : afficher le nombre d'entrées après
        // chaque passage d'un groupe
        ?>

    </body>
</html>
