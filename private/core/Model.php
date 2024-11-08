<?php

class Model extends SmsDB
{
    protected $table = "USERS";
    public function __construct()
    {

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