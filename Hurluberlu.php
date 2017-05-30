<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hurluberlu
 *
 * @author Seme
 */
class Hurluberlu extends Personne {
    /*
     * État
     */

    private $etatMental;

    /** 
     * Constructeur
     * @param type $unNom Le nom de la personne
     * @param type $unPrenom Le prénom de la personne
     * @param type $unEtatMental L'état mental de l'hurluberlu
     */
    public function __construct($unNom, $unPrenom, $unEtatMental) {
        // appel du constructeur de la classe mère
        parent::__construct($unNom, $unPrenom);
        // initialisation de l'attribut spécialisé
        $this->etatMental = $unEtatMental;
    }
    
    /**
     * Présentation de la personne, redéfinie car l'Hurluberlu est une
     * spécialisation de la Personne
     */
    public function sePresenter() {
        echo $this->nom;
        // Je fais appel à la façon de se présenter de la Personne
        parent::sePresenter();
        // je me spécialise
        echo 'De plus, jeunes gens, je suis barré car je me sens : ' . $this->etatMental;
    }

}
