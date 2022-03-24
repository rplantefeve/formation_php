<?php
/* @oas [post] /create.php Insert movie
 * description: "Insert a movie in database"
 */

// Il est nécessaire d'envoyer des en-têtes HTTP
// Dit au navigateur d'accepter les requêtes non authentifiées venant de partout
header('Access-Control-Allow-Origin: *');
// Indication sur le contenu renvoyé. Ici : fichier JSON. Le type doit respecter les types MIME.
header('Content-Type: application/json; charset=UTF-8');
// Seule la méthode POST est autorisée
header('Access-Control-Allow-Methods: POST');
// Contrôler quels en-têtes sont autorisés
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require_once '../config/database.php';
require_once '../classes/Film.php';

$db = new Database();
$connexion = $db->getConnection();

// Création de l'objet Film
$film = new Film($connexion);

// Récupérer le contenu JSON passé en entrée du script
$data = json_decode(file_get_contents('php://input'));

if ($data) {
    $film->titre = $data->titre;
    $film->titreOriginal = $data->titreOriginal;

    if ($film->create()) {
        echo json_encode(array('message' => 'Film créé avec succès.'));
    } else {
        echo json_encode(array('message' => 'Erreur lors de l\'insertion du film.'));
    }
} else {
    echo json_encode(array('message' => 'Erreur : pas de paramètres passés en entrée.'));
}
