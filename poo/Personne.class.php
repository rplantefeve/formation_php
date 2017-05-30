<?php

include './Entite.class.php';

/**
 * Personne
 *
 * @author Seme
 */
class Personne extends Entite {

    /**
     * Nom
     * @var string 
     */
    protected $nom;

    /**
     * Prénom
     * @var string 
     */
    protected $prenom;

    /**
     * nombre de personnes dans tout le programme
     * @var int  
     */
    public static $nombrePersonnes = 0;

    /**
     * Constructeur
     * @param string $unNom
     * @param string $unPrenom
     */
    public function __construct(string $unNom, string $unPrenom) {
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
        // on incrémente le compteur à chaque instanciation
        Personne::$nombrePersonnes++;
    }

    /**
     * Affiche les informations de la personne
     */
    public function afficherInfos() {
        echo "Voici donc la personne de nom " . $this->nom . " et de prénom " . $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

}
