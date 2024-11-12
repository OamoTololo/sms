<?php

class Model extends SmsDB
{
    public array $errors = [];
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
            if (property_exists($this, "allowedColumns")) {
                foreach ($data as $key => $column) {
                    if (!in_array($key, $this->allowedColumns)) {
                        unset($data[$key]);
                    }
                }
            }

            if (property_exists($this, "beforeInsert")) {
                foreach ($this->beforeInsert as $function) {
                    $data = $this->$function($data);
                }
            }

            $keys = array_keys($data);
            $columns = implode(",", $keys);
            $values = ":" . implode(",:", $keys);

            $query = "INSERT INTO $this->table ($columns) VALUES ($values)";

            $result = $this->query($query, $data);

            // Debugging output
            if (!$result) {
                error_log("Insert failed: " . print_r($this->errors, true));
            }

            return $result;
        } catch (PDOException $e) {
            error_log("Database error during insert: " . $e->getMessage());
            throw new Exception("Error inserting data: " . $e->getMessage());
        }
    }


    public function update($id, $data)
    {
        try {
            $data['user_id'] = $id;
            $str = "";

            foreach ($data as $key => $value) {
                $str .= "$key = :$key, ";
            }

            $str = rtrim($str, ", ");

            $query = "UPDATE $this->table SET $str WHERE user_id = :user_id LIMIT 1";

            return $this->query($query, $data);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function delete($Id)
    {
        try {
            $query = "DELETE FROM $this->table WHERE user_id = :user_id LIMIT 1";
            $data['user_id'] = $Id;

            return $this->query($query, $data);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
}