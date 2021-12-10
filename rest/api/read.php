<?php
/* @oas [get] /read.php Get movies
 * description: "List all movies"
 */

// Il est nécessaire d'envoyer des en-têtes HTTP
// Dit au navigateur d'accepter les requêtes non authentifiées venant de partout
header('Access-Control-Allow-Origin: *');
// Indication sur le contenu renvoyé. Ici : fichier JSON. Le type doit respecter les types MIME.
header('Content-Type: application/json; charset=UTF-8');

require_once '../config/database.php';
require_once '../classes/Film.php';

$db = new Database();
$connexion = $db->getConnection();

// Création de l'objet Film
$film = new Film($connexion);

// On récupère les résultats de la BDD
$listeFilms = $film->getAll();

// nombre de résultats
$rowCount = $listeFilms->rowCount();

if ($rowCount > 0) {
    $films_arr = array();
    $films_arr['data'] = array();
    while ($row = $listeFilms->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $movie = array(
      'filmid' => $FILMID,
      'titre' => $TITRE,
      'titreoriginal' => $TITREORIGINAL,
    );
        // ajout du film à la liste
        array_push($films_arr['data'], $movie);
    }
    // on doit renvoyer du JSON
    echo json_encode($films_arr);
    exit;
}

echo json_encode(array('message' => 'Pas de films dans la BDD.'));
