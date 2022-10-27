<?php

class Connections {

    protected $connection; 

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        $servername = "localhost";
        $username = "mykolas";
        $password = "labas";
        $database = "project_ads";
        
        try {
          $this->connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }
}