<?php

/**
 * Description of InstrumentACordes
 *
 * @author Seme
 */
class InstrumentACordes extends Instrument {

    private $nombreDeCordes;
    private $typeDeCordes;

    public function __construct($nomInstr, $prixInstr, $nombreDeCordes,
            $typeDeCordes) {
        // partie héritée
        parent::__construct($nomInstr, $prixInstr);
        // partie spécialisée
        $this->nombreDeCordes = $nombreDeCordes;
        $this->typeDeCordes = $typeDeCordes;
    }

    public function depreciation(...$args) {
        if (count($args) == 0) {
            parent::depreciation($args);
        } elseif (count($args) == 1) {
            $this->setPrix($this->getPrix() * (1 - $args[0]));
        }
    }

}
