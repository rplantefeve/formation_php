<?php

class Film
{
    public $filmId;
    public $titre;
    public $titreOriginal;

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

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE FILMID = ?";

        // requête préparée
        $stmt = $this->conn->prepare($sql);

        // Lier le film id dans la requête
        $stmt->bindParam(1, $id);

        // exécution de la requête
        $stmt->execute();

        // Je récupère la ligne de résultats
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Je mets à jour mes valeurs d'attributs
        $this->filmId = $id;
        $this->titre = $row['TITRE'];
        $this->titreOriginal = $row['TITREORIGINAL'];
    }

    public function create()
    {
        $sql = "INSERT INTO {$this->table} SET " .
            'titre = :titre,' .
            'titreOriginal = :titreOriginal';

        // requête préparée
        $stmt = $this->conn->prepare($sql);

        // Comme la saisie vient de l'utilisateur, il faut nettoyer les données
        $this->titre = htmlspecialchars(strip_tags($this->titre));
        $this->titreOriginal = htmlspecialchars(strip_tags($this->titreOriginal));

        // Lier les variables
        $stmt->bindParam(':titre', $this->titre);
        $stmt->bindParam(':titreOriginal', $this->titreOriginal);

        // exécuter la requête
        if ($stmt->execute()) {
            return true;
        }
        // Affichage d'une erreur sinon
        printf("Erreur : %s\n", $stmt->error);

        return false;
    }
}
