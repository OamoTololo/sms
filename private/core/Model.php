<?php

class Model extends SmsDB
{
    public function __construct()
    {
        if (!property_exists($this, "table")) {
            $this->table = strtoupper($this->table) . strtoupper("S");
        }
    }

    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";

        return $this->query($query, [
            ":value" => $value
        ]);
    }

    public function findAll()
    {
        $query = "SELECT * FROM $this->table";
        return $this->query($query);
    }
}