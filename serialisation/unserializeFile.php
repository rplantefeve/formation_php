<?php

// Ouverture d'un fichier en lecture
$contents = file_get_contents(__DIR__.'\data\test.txt');
$unsrzed = unserialize($contents);
var_dump($unsrzed);
