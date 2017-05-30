<?php

abstract class Entite {

    protected $existe;

    public function __construct() {
        $this->existe = true;
    }

    public abstract function afficherInfos();

    public function tuerEntite() {
        $this->existe = false;
    }

}
