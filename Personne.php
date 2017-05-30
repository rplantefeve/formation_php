<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author Seme
 */
class Personne {
    /*
     * Données de l'objet <=> état
     */

    protected $nom;
    protected $prenom;
    public static $nbPersonnes = 0;

    /*
     * Comportement
     * BEGIN
     */

    /**
     * 
     * @param type $unNom
     * @param type $unPrenom
     */
    public function __construct($unNom, $unPrenom) {
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
        Personne::$nbPersonnes++;
    }

    /**
     * Présentation de la personne
     */
    public function sePresenter() {
        echo 'Je m\'appelle ' . $this->prenom . ' ' . $this->nom . '<br>';
    }

    function getNom() {
        return 'Mon nom est ' . $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    /*
     * Comportement
     * END
     */
}
