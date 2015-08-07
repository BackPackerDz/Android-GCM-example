<?php
  
class DB_Connect {

    public function connect() {
        require_once 'config.php';
        // Connexion à MySQL

        $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        return $con;
    }
    
    public function close() {
        mysql_close();
    }
  
} 
?>