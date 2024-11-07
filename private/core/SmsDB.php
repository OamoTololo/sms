<?php

class SmsDB {
    private $host = "localhost:3306";
    private $username = "root";
    private $password = "O@mO23352433";
    private $database = "smsDB";

    private function connect()
    {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public function run($query, $data = [], $dataType = "object")
    {
        $conn = $this->connect();

        $result = $conn->prepare($query);

        if ($result) {
            $check = $result->execute($data);
            if ($check) {
                if ($dataType == "object") {
                    $data = $result->fetch(PDO::FETCH_OBJ);
                } else {
                    $data = $result->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }

        return false;
    }

    public function query($conn)
    {

    }
}