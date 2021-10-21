<?php

$notes = array('maths' => 1, 'svt' => 8, 'algo' => 6, 'philo' => 5);
$srzed = serialize($notes);
// Ouverture d'un fichier en lecture/écriture, en le créant s'il n'existe pas.
$fh = fopen(__DIR__.'\data\test.txt', 'a+');
// On écrit.
fwrite($fh, $srzed);
 // On ferme.
fclose($fh);
