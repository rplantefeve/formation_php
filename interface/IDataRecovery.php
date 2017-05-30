<?php

/**
 *
 * @author Seme
 */
interface IDataRecovery {

    /**
     * Renvoie un tableau associatif des films
     */
    public function findAll($tableName);

    /**
     * Revoie un film sous forme de tableau
     * @param int $id L'identifiant du film
     * @param string $columnID La colonne qui contient l'id du film
     */
    public function findById($id, $columnID, $tableName);
}
