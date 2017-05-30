<?php



/**
 * Description of DBRecovery
 *
 * @author Seme
 */
class DBMysqliRecovery implements IDataRecovery {

    private $connexion;

    public function __construct($host, $username, $passwd, $dbname) {
        $this->connexion = new mysqli($host, $username, $passwd, $dbname);
    }

    //put your code here
    public function findAll($tableName):array {
        $sql = "SELECT * FROM $tableName";
        $result = $this->connexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function findById($id, $columID, $tableName) :array{
        $sql = "SELECT * FROM $tableName WHERE $columID = $id";
        $result = $this->connexion->query($sql);
        return $result->fetch_array(MYSQLI_ASSOC);
    }

}




