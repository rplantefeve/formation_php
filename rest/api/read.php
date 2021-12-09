<?php

require_once '../config/database.php';

$db = new Database();
$connexion = $db->getConnection();

echo 'Connexion réussie !';