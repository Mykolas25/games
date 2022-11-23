<?php

require_once __DIR__  . "/Model.php";

class User extends Model
{
    public $table = 'users';
    public $fillables = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    public function getByCredentials($id): array|bool
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
