<?php
 
class DB_Functions {
 
    private $db;

    private $mysqli;
 
    function __construct() {
        include_once 'db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->mysqli = $this->db->connect();
    }
 
 
    /**
     * On ajoute un nouvel utilisateur
     */
    public function addUser($gcm_token) {
        // insert user into database
        $result = $this->mysqli->query("INSERT INTO gcm_ids (gcm_token, date_creation) VALUES('$gcm_token', NOW())");
        
        if ($result)
        {
            return true;        
        }
        else 
        {
            return false;
        }
    }
 
    /**
     * Pour obtenir tous les utilisateurs
     */
    public function getDevices() {
        $result = $this->mysqli->query("select gcm_token FROM gcm_ids");
        return $result;
    }
 
}
 
?>
