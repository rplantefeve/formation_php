<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objet
 *
 * @author Seme
 */
abstract class Objet {
    private $typeMateriau;
    private $etatObjet;
    
    public function __construct($typeMateriau, $etatObjet) {
        $this->etatObjet = $etatObjet;
        $this->typeMateriau = $typeMateriau;
    }
    
    public function getEtatObjet() {
        return $this->etatObjet;
    }

        
    protected abstract function afficher();
    
    protected function miseauRebut(){
        $this->etatObjet = "Inutilisable";
    }
}
