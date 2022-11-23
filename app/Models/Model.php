<?php

require_once __DIR__  . "/../../core/Connections.php";
require_once __DIR__  . "/../../core/UploadFiles.php";

class Model extends Connections
{
    //get all id
    public function getAll(): array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(PDO::FETCH_ASSOC);
    }

    //get by id
    public function get($id): array|bool
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    //Compare incoming data keys with fillables, intersects arrays
    //Return only the data elements which keys correspond to fillable values.
    //
    public function filterIncomingData(array $data): array
    {
        return array_intersect_key($data, array_flip($this->fillables));
    }

    //Run sql create
    public function create(array $data): int
    {
        $filteredData = $this->filterIncomingData($data);

        if (!$filteredData) {
            return '';
        }

        $sql = $this->createSql();
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($filteredData);
        $id = $this->connection->lastInsertId();

        return $id;
    }

    //Run sql update
    public function update(array $data, $id)
    { 
        $filteredData = $this->filterIncomingData($data);
        if (!$filteredData) {
            return '';
        }
       
        $sql = $this->updateSql();
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($filteredData + ['id' => $id]);
    }

    //Make sql statement for create, using fillables
    private function createSql(): string
    {
        $columns = implode(',', $this->fillables);
        $placeholders = ":" . implode(',:', $this->fillables);

        return "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
    }

    //Make sql statement for update using fillables
    private function updateSql(): string
    {
        $columns = [];
        foreach ($this->fillables as $fillable) {
            $columns[] .= "$fillable=:$fillable";
        }

        $columns = implode(', ', $columns);

        return "UPDATE {$this->table} SET $columns WHERE id = :id";
    }

    //Delete model
    public function delete(int $id): void
    {
        $sql = "DELETE FROM 
                    {$this->table}
                WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    //Upload image
    public function uploadImage(array $data): array
    {
        $uploadDir = __DIR__ . "/../../storage/images";

        if (isset($data['files']['image']) && $data['files']['image']['size'] > 0) {
            $data['image'] = (new UploadFiles($data['files']['image'], $uploadDir))->upload();
        }

        return $data;
    }
}
