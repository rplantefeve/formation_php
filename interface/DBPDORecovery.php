<?php



/**
 * Description of DBPDORecovery
 *
 * @author Seme
 */
class DBPDORecovery implements IDataRecovery {

    private $connexion;

    public function __construct() {
        $this->connexion = new PDO('mysql:host=localhost;dbname=cinema_crud',
                'userCinema', 'pwdCinema');
    }

    public function findAll($tableName) {
        $sql = "SELECT * FROM $tableName";
        $result = $this->connexion->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id, $columnID, $tableName) {
        $sql = "SELECT * FROM $tableName WHERE $columID = $id";
        $result = $this->connexion->query($sql);
        return $result->fetchObject();
    }

}
