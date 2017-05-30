<?php

class Branche {

    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

}

/**
 * Description of Entreprise
 *
 * @author Seme
 */
class Entreprise extends Entite {

    private $numeroSiret;
    // agrégation
    private $employes = array();
    // composition
    private $branches = array();

    public function __construct(string $numeroSiret) {
        $this->numeroSiret = $numeroSiret;
    }

    /**
     * Ajout d'une branche à l'entreprise
     * @param string $nom
     */
    public function ajouterBranche(string $nom) {
        // l'ajout et la création s'effectue en même temps avec classe anonyme  
        $this->branches[] = new class($nom) {

            private $nom;

            public function __construct($nom) {
                $this->nom = $nom;
            }

            public function getNom() {
                return $this->nom;
            }
        };
    }

    /**
     * Ajout d'un employé à l'entreprise
     * @param Employe $employe
     */
    public function ajouterEmploye(Personne $employe) {
        // ici, pas de création, l'objet existe ailleurs
        $this->employes[] = $employe;
    }

    public function afficherEmployes() {
        $retour = "Voici la liste des employés de l'entreprise " . $this->numeroSiret . " : \n";
        foreach ($this->employes as $employe) {
            $retour .= $employe->afficherInfos() . "<br>";
        }
        echo $retour;
    }

    public function afficherInfos() {
        echo "Je suis une entreprise de numero SIRET : " . $this->numeroSiret;
        if (!empty($this->branches)) {
            echo " composée des branches : ";
            foreach ($this->branches as $branche) {
                echo $branche->getNom() . " / ";
            }
        }
        if (!empty($this->employes)) {
            echo " et des employés : ";
            foreach ($this->employes as $employe) {
                // entre temps, on a rajouté les accesseurs de Personne
                echo $employe->getNom() . " " . $employe->getPrenom() . " / ";
            }
        }
    }

}
