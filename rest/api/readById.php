<?php
/*
 * @oas [get] /readById.php?id={id}
 * description: "Get movie informations by its id"
 * parameters:
 *   - (path) id {Integer} The movie ID
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

// Récupération de l'ID dans l'URL
$filmId = isset($_GET['id']) ? $_GET['id'] : exit();

// récupère les infos du film en fonction de son id
$film->getById($filmId);

$film_arr = array(
    'id' => $film->filmId,
    'titre' => $film->titre,
    'titreOriginal' => $film->titreOriginal,
);

// on doit renvoyer du JSON
echo json_encode($film_arr);
exit;
