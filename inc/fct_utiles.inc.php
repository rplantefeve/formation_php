<?php
/**
 * Un autoload des classes.
 * Le tableau $possibilites contient les différents chemins et extensions possibles.
 */
spl_autoload_register(function ($className) {
    $base = '../poo/';
    $extension = '.class.php';
    $possibilites = array(
        $base.$className.$extension,
        $base.'class/'.$className.$extension,
        $base.$className.'.php',
        $className.$extension        
    );
    foreach ($possibilites as $fichier) {
        if (file_exists($fichier)) {
            require_once $fichier;

            return true;
        }
    }

    return false;
});
