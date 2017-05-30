<?php
// Si rien n'est initialisé, on initialise
// (sinon, on s'en tamponne et on continue)

// Ce bidule, c'est la valeur entrée, soit les gens qui entrent
if (!isset($_POST['nombre'])) {
    $_POST['nombre'] = 0;
}

// On initialise la session
session_start();
// Ce truc là, c'est la valeur de "sauvegarde" dans le formulaire pour pas que ça foire
if (!isset($_SESSION['entrees'])) {
    $_SESSION['entrees'] = 0;
}

// Le nombre total est égal au nombre total précédent plus les nouvelles entrées
$_SESSION['entrees'] += $_POST['nombre'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nombre d'entrées</title>
        <style>
            a{
                text-decoration: none;
                color:green;
            }
            a:hover{
                color:limegreen;
            }
        </style>
    </head>
    <body>
        <header style="margin-bottom:1.5rem;">
            <h1>Nombre d'entrées</h1>
            <a href="index.php">Index</a>
        </header>

        <form method="post" action="entreesSession.php">
            <!-- Ce truc affiche le champs pour entrer le nombre de personnes -->
            <label for="nombre">Nombre de personnes dans le groupe : </label>
            <input name="nombre" type="number" id="nombre"><br>

            <!-- Bouton pour envoyer-->
            <input type="submit" value="Envoyer" id="valider"/><br>
        </form>
        <?php
        // Arrivée du xieme groupe
        
        echo "Arrivée du groupe de " . $_POST['nombre'] . " personnes.<br>" . $_SESSION['entrees'] . " entrées au total.<br><br>";
        ?>
    </body>
</html>
