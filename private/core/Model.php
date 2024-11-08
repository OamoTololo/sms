<?php

class Model extends SmsDB
{
    public function __construct()
    {
        try {
            if (!property_exists($this, "table")) {
                $this->table = strtoupper(get_class($this)) . strtoupper("S");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die();
        }
    }

    public function where($column, $value)
    {
        try {
            $column = addslashes($column);
            $query = "SELECT * FROM $this->table WHERE $column = :value";

            return $this->query($query, [
                ":value" => $value
            ]);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function findAll()
    {
        try {
            $query = trim("SELECT * FROM $this->table");
            return $this->query($query);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function insert($data)
    {
        try {
            $keys = array_keys($data);
            $columns = implode(",", $keys);
            $values = implode(",:", $keys);

            $query = "INSERT INTO $this->table ($columns) VALUES (:$values)";

            return $this->query($query, $data);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update($id, $data)
    {
        try {
            $column = addslashes($data);
            $query = "INSERT INTO $this->table ($column) VALUES ($column)";

            return $this->query($query, [
                ":value" => $value
            ]);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function delete($Id)
    {
        try {
            $column = addslashes($data);
            $query = "INSERT INTO $this->table ($column) VALUES ($column)";

            return $this->query($query, [
                ":value" => $value
            ]);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
}