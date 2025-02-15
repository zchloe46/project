<?php
class DBConnection {
    public function getConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage(); 
            return null;
        }
    }
}


?>