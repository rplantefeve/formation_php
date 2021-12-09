<?php

class Database
{
    private $driver;
    private $host;
    private $port;
    private $dbName;
    private $username;
    private $password;    

    public $conn;

    public function __construct()
    {
        try {
            $infosConnexion = parse_ini_file(__DIR__ . '/parameters.ini');

            $this->driver = $infosConnexion['database_driver'];
            $this->host = $infosConnexion['database_host'];
            $this->dbName = $infosConnexion['database_name'];
            $this->username = $infosConnexion['database_user'];
            $this->password = $infosConnexion['database_password'];
        } catch(Exception $e) {
            echo 'Something wrong with the config: '. $e->getMessage();
            exit;
        }   
    }

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO($this->driver .':host=' . $this->host . ';port='. $this->port .'dbname=' . $this->dbName.";options='--client_encoding=UTF8'", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES 'UTF8'");
        } catch (PDOException $exception) {
            echo 'Database could not be connected: ' . $exception->getMessage();
            exit;
        }

        return $this->conn;
    }
}
