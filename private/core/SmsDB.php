<?php

class SmsDB {
    protected function connection()
    {
        try {
            $dbHost = 'localhost:3306';
            $username = 'root';
            $password = 'O@mO23352433';
            $databaseName = 'smsDB';

            return new PDO("mysql:host=$dbHost;dbname=$databaseName", $username, $password);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }

    public function query($query, $data = [], $dataType = "object")
    {
        try {
            $conn = $this->connection();
            $result = $conn->prepare($query);

            if ($result) {
                $check = $result->execute($data);
                if ($check) {
                    if ($dataType == "object") {
                        // Fetch all rows as objects
                        return $result->fetchAll(PDO::FETCH_OBJ);
                    } else {
                        // Fetch all rows as associative arrays
                        return $result->fetchAll(PDO::FETCH_ASSOC);
                    }
                } else {
                    // Log error if needed
                    error_log("Query execution failed: " . implode(", ", $result->errorInfo()));
                }
            } else {
                error_log("Failed to prepare query: " . implode(", ", $conn->errorInfo()));
            }

            // Return empty array if query fails
            return [];
        } catch (PDOException $e) {
            error_log("Failed to prepare query: " . $e->getMessage());
            die();
        }
    }

}