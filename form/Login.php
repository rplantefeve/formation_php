<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Seme
 */
class Login {

    private $login;
    private $mdp;

    public function __construct($login, $mdp) {
        $this->login = $login;
        $this->mdp = $mdp;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }

}
