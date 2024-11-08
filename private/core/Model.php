<?php

class Model extends SmsDB
{
    protected $table = "USERS";
    public function __construct()
    {

    }
    public function where($column, $value)
    {
        $query = "SELECT * FROM $this->table WHERE :column = :value";

        return $this->query($query, [
            ":column" => $column, ":value" => $value
        ]);
    }
}