<?php
/**
* Builds a file path with the appropriate directory separator.
* @param string $segments,... unlimited number of path segments
* @return string Path
*/
function file_build_path(...$segments)
{
    return join(DIRECTORY_SEPARATOR, $segments);
}

/* Ouverture / fermeture de fichier */
$filename = 'content';
$somecontent = 'totô';

if (!$handle = fopen(file_build_path(__DIR__, $filename), 'r')) {
    echo "Impossible d'ouvrir le fichier ($filename)";
    exit;
} else {
    fclose($handle);
}

/* Lecture du contenu d'un fichier */
if (!$handle = fopen(__DIR__ . "/${filename}", 'r')) {
    echo "Impossible d'ouvrir le fichier (${filename})";
    exit;
} else {
    $i = 0;
    while (!feof($handle)) {
        $ligne = fgets($handle);
        echo "Ligne #${i} : ${ligne}<br/>";
        $i++;
    }
    fclose($handle);
}

/* Écriture dans un fichier */
if (!$handle = fopen(__DIR__ . "/${filename}", 'a')) {
    echo "Impossible d'ouvrir le fichier (${filename})";
    exit;
} else {
    $nbOctets = fwrite($handle, $somecontent);
    echo "Nombre d'octets écrits : ${nbOctets}";
    fclose($handle);
}
