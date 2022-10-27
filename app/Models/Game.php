<?php

require_once __DIR__  . "/../../core/Connections.php";

class Game extends Connections
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public $table = 'games';

    public function getAll(): Array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id)
    {
       $sql = "SELECT * FROM {$this->table} WHERE id = ?";
       $stmt = $this->connection->prepare($sql);
       $stmt->execute($data);
       $result = $stmt->fetch(PDO::FETCH_ASSOC);

       return $result;
    }

    public function create(array $data)
    {
        
    }
}