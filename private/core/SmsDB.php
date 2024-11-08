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
        $conn = $this->connection();
        $result = $conn->prepare($query);

        if ($result) {
            $check = $result->execute($data);
            if ($check) {
                if ($dataType == "object") {
                    $data = $result->fetch(PDO::FETCH_OBJ);
                } else {
                    $data = $result->fetchAll(PDO::FETCH_ASSOC);
                }

                return $data;
            }
        }

        return [];
    }

}