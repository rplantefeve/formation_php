<?php
//include './DBRecovery.php';
include './FileRecovery.php';

// via la BDD
///$dataRecovery = new DBRecovery('localhost', 'userCinema', 'pwdCinema', 'cinema_crud');
//$films = $dataRecovery->findAll();
//var_dump($films);
// via le fichier
$dataRecovery = new FileRecovery('datafilm.csv');
// dans les deux cas, cette ligne ne changera pas
$films = $dataRecovery->findAll();
$colonneId = 'FILMID';
$film = $dataRecovery->findById(2, $colonneId);
var_dump($films);
var_dump($film);
$film = $dataRecovery->findById(10, $colonneId);
var_dump($film);

