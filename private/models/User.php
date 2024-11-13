<?php

class User extends Model
{
    protected $table = "USERS";

    protected array $allowedColumns = [
        'name',
        'surname',
        'username',
        'date',
        'email',
        'password',
        'gender',
        'role'
    ];
    protected array $beforeInsert = [
        'makeUrlAddress',
        'makeSchoolId',
        'hashPassword'
    ];

    public function validate($data)
    {
        $this->errors = [];

        if (!empty($data['name']) || !empty($data['surname']) || !empty($data['username']) || !empty($data['date']) ||
            !empty($data['url_address']) || !empty($data['gender']) || !empty($data['email']) || !empty($data['role']) ||
            !empty($data['password'])) {
                if (!preg_match("/^[a-zA-Z]+$/", $data['name']) || !preg_match("/^[a-zA-Z]+$/", $data['surname'])) {
                    $this->errors['warning'] = "Only characters are allowed! No numbers";
                }

                if (!preg_match("/^[a-zA-Z0-9]+$/", $data['username'])) {
                    $this->errors['username'] = "Only characters and numbers are allowed";
                }

                if (!$this->validateDate($data['date'], 'Y-m-d')) {
                    $this->errors['date'] = "Invalid date";
                }

                $gender = ['female', 'male', 'other'];

                if (!in_array($data['gender'], $gender) && !preg_match("/^[a-zA-Z]+$/", $data['gender'])) {
                    $this->errors['gender'] = "Please select a valid gender!";
                }

                if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $this->errors['email'] = "Invalid email address";
                }

                if ($this->where('email', $data['email'])) {
                    $this->errors['email'] = "Email already exists!";
                }

                $role = ['student', 'receptionist', 'lecturer', 'admin', 'super_admin'];

                if (!in_array($data['role'], $role) && !preg_match("/^[a-zA-Z]+$/", $data['role'])) {
                    $this->errors['role'] = "Please select a valid role!";
                }

                if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $data['password'])) {
                    $this->errors['password'] = "Minimum of 8 characters, At least one uppercase letter, at least one lowercase letter and a number and a special character!";
                }

                if (count($this->errors) == 0) {
                    return true;
                }
        } else {
            $this->errors[] = "All fields are required!";
        }
        
        return false;
    }

    public function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public function makeUrlAddress($data)
    {
        $data['url_address'] = $this->randomString(60);

        return $data;
    }
    public function makeSchoolId($data)
    {
        if (!isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $this->randomString(60);
        }

        return $data;
    }

    public function hashPassword($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $data;
    }

    private function randomString($length): string
    {
        $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
            'o', 'p', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'R', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $text = "";

        for ($x = 0; $x < $length; $x++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }

        return $text;
    }
}