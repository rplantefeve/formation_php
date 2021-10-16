<?php
$fichier = 'users';
// Ajouter un nouvel utilisateur
$chaine = "renaud\n";
// Write the contents back to the file
if (!file_put_contents($fichier, $chaine, FILE_APPEND)) {
    echo 'Erreur d\'écriture';
}
