<?php



/**
 * Description of FileRecovery
 *
 * @author Seme
 */
class FileRecovery implements IDataRecovery {

    /**
     * @var string Chemin du fichier où extraire les données 
     */
    private $fichier;

    public function __construct($fileName) {
        $this->fichier = $fileName;
    }

    public function findAll($tableName) {
        // les films obtenus
        $films = array();
        // les colonnes obtenues
        $colonnes = array();
        // je lis le contenu du fichier ligne par ligne
        $filmsLu = file($this->fichier);
        $premiereLigne = true;
        foreach ($filmsLu as $ligne) {
            $ligne = substr($ligne, 0, -1);
            // j'esquive la première ligne (en-têtes)
            if ($premiereLigne) {
                $premiereLigne = false;
                $colonnes = $this->extraireColonnes($ligne);
            } else {
                // Extraire un film
                $film = $this->extraireFilm($ligne, $colonnes);
                // j'ajoute chaque film créé dans le tableau associatif des $films
                $films[] = $film;
            }
        }
        // à la fin du parcours, je retourne mes films
        return $films;
    }

    private function extraireColonnes($ligne, $columnID = null, &$indice = null) {
        $colonnesLues = explode(";", $ligne);
        // je récupère chaque colonne
        for ($i = 0; $i < count($colonnesLues); $i++) {
            // chaque colonne est insérée dans les $colonnes
            $colonnes[] = substr($colonnesLues[$i], 1, -1);
            // je teste si la colonne en cours est la columnID
            if ($columnID && $colonnes[$i] == $columnID) {
                $indice = $i;
            }
        }

        return $colonnes;
    }

    private function extraireFilm(string $ligne, array $colonnes): array {
        // pour chaque ligne, je split en fonction du ;
        $elements = explode(';', $ligne);
        $film = array();
        // pour tous les éléments
        for ($index = 0; $index < count($elements); $index++) {
            // je créé un film (tableau associatif), chaque colonne prend la valeur correspondante
            // seulement si la valeur n'est pas NULL
            $get = $elements[$index];
            if (strpos($get, 'NULL') === false) {
                $val = substr($elements[$index], 1, -1);
            } else {
                $val = null;
            }
            $film[$colonnes[$index]] = $val;
        }
        return $film;
    }

    private function extraireFilmById(string $ligne, string $id,
            int $indiceColumnID, array $colonnes): array {
        $film = array();
        // pour chaque ligne, je split en fonction du ;
        $elements = explode(';', $ligne);
        // Je teste si la colonne contenant l'id est égale à l'id passé en paramètre
        if (substr($elements[$indiceColumnID], 1, -1) == $id) {
            // pour tous les éléments
            for ($index = 0; $index < count($elements); $index++) {
                // je créé un film (tableau associatif), chaque colonne prend la valeur correspondante
                $film[$colonnes[$index]] = substr($elements[$index], 1, -1);
            }
        }
        return $film;
    }

    public function findById($id, $columnID, $tableName) {
        // extraction de l'enregistrement avec le bon id seulement
        // les colonnes obtenues
        $colonnes = array();
        // je lis le contenu du fichier ligne par ligne
        $filmsLu = file($this->fichier);
        $premiereLigne = true;
        $trouve = false;
        $indiceID = 0;
        $film = array();
        // boucle de lecture des lignes du fichier sous forme de tableau
        $i = 0;
        while (!$trouve && $i < count($filmsLu)) {
            $ligne = $filmsLu[$i];
            $ligne = substr($ligne, 0, -1);
            // j'esquive la première ligne
            if ($premiereLigne) {
                $premiereLigne = false;
                $colonnes = $this->extraireColonnes($ligne, $columnID, $indiceID);
            } else {
                $film = $this->extraireFilmById($ligne, $id, $indiceID,
                        $colonnes);
                if ($film != null) {
                    $trouve = true;
                }
            }
            $i++;
        }
        // à la fin du parcours, je retourne mon film
        return $film;
    }

}
