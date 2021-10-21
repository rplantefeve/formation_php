<?php
require_once '../inc/fct_utiles.inc.php';

$guitare = new Instrument('passable','bois','guitare',456.654);
$srzed = serialize($guitare);
var_dump($srzed);
// Ouverture d'un fichier en lecture/écriture, en le créant s'il n'existe pas.
$fh = fopen(__DIR__.'/data/instrument.txt', 'a+');
// On écrit.
fwrite($fh, $srzed);
 // On ferme.
fclose($fh);