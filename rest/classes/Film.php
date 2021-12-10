<?php

class Film
{
    private $filmId;
    private $titre;
    private $titreOriginal;

    private $conn;
    private $table;

    public function __construct($aConn)
    {
        $this->table = 'film';
        $this->conn = $aConn;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";

        // requête préparée
        $stmt = $this->conn->prepare($sql);

        // exécution de la requête
        $stmt->execute();

        // Retour des résultats
        return $stmt;
    }
}
