<?php

/**
 * Description of Etudiant
 *
 * @author Seme
 */
class Etudiant extends Personne {

    const motivation = "Au top";
    private $cours = array();

    public function afficherInfos() {
        echo "Voici donc la personne étudiante de nom " . $this->nom . " et de prénom " . $this->prenom;
    }
    
    public function afficherMotivation(){
        echo self::motivation;
    }

}
