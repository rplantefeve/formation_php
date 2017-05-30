<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Exo7-ClassInstrument
 *
 * @author admin
 */
class Instrument extends Objet implements IJouable{

    /**
     * Variable qui contient le nom de l'instrument
     * @var type string
     */
    private $nom;

    /**
     * Variable qui contient le prix de l'instrument
     * @var type integer
     */
    private $prix;

    /**
     * Constructeur de l'objet, à partir de son nom et de son prix
     * @param type $nomInstr string
     * @param type $prixInstr integer
     */
    public function __construct($etatObjet, $typeMateriau, $nomInstr, $prixInstr) {
        // appel du constructeur de la classe mère
        parent::__construct($etatObjet, $typeMateriau);
        $this->nom = $nomInstr;
        $this->prix = $prixInstr;
    }

    /**
     * Methode qui retourne le nom de l'objet
     * @return type string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Methode qui fixe le nom de l'objet
     * @param type $newNom string
     */
    public function setNom($newNom) {
        $this->nom = $newNom;
    }

    /**
     * Methode qui retourne le prix de l'objet
     * @return type integer
     */
    public function getPrix() {
        return $this->prix;
    }

    /**
     * Methode qui fixe le prix de l'objet
     * @param type $newPrix integer
     */
    public function setPrix($newPrix) {
        $this->prix = $newPrix;
    }

    /**
     * Methode qui affiche le nom et prix de l'instrument
     */
    public function afficher() {
        echo " Cet instrument est un " . $this->nom .
        " et vaut " . $this->prix . " roubles. Mon état est : " . $this->getEtatObjet();
    }

    /**
     * Methode qui diminue le prix de l'instrument de 10%
     */
    public function depreciation(...$args) {
        //$newPrix = $this.$prix *0.9 ;
        $this->prix *= 0.9;
    }

    public function jouer() {
        echo 'Wiiiiiiz';
    }

}
