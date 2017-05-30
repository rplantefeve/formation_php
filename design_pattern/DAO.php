<?php

/**
 * Description of DB
 *
 * @author Seme
 */
class DAO {

    
    private $dao = null;

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    protected function __construct() {
        
    }

    public function getDAO(IDataRecovery $dao = null) {
        //Si la connexion de l'objet n'est pas définie
        if (is_null($this->dao)) {
            //Si la connexion en parametre est definie
            if(!is_null ($dao)){
                //J'affecte la connexion passée en paramètre à la connexion de l'objet
                $this->dao = $dao;
            }
        }
        return $this->dao;
    }

    // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
    // thus eliminating the possibility of duplicate objects.
    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

}
