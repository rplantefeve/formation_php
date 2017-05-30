<?php

/**
 * Description of DB
 *
 * @author Seme
 */
class DB {

    private $host = 'localhost';
    private $user = 'userCinema';
    private $password = 'pwdCinema';
    private $db = 'cinema_crud';
    private $connection = null;

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    protected function __construct() {
        
    }

    public function getConnection() {
        if (is_null($this->connection)) {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            $this->connection = new PDO($dsn, $this->user, $this->password);
        }
        return $this->connection;
    }

    // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
    // thus eliminating the possibility of duplicate objects.
    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

}
