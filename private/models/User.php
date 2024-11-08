<?php

class User extends Model
{
    protected $table = "USERS";

    protected array $allowedColumns = [
        'name',
        'surname',
        'username',
        'email',
        'password',
        'gender',
        'role'
    ];
    protected array $beforeInsert = ['make_url_address', 'make_school_id', 'hash_password'];

    public function validate($data)
    {
        $this->errors = [];

        if (!empty($data['name']) || !empty($data['surname']) || !empty($data['username']) || !empty($data['date']) ||
            !empty($data['url_address']) || !empty($data['gender']) || !empty($data['email']) || !empty($data['role']) ||
            !empty($data['password'])) {
                if (!preg_match("/^[a-zA-Z]+$/", $data['name']) || !preg_match("/^[a-zA-Z]+$/", $data['surname'])) {
                    $this->errors['name'] = "Only characters are allowed! No numbers";
                    $this->errors['surname'] = "Only characters are allowed! No numbers";
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

    public function make_url_address($data)
    {
        return $data;
    }
    public function make_school_id($data)
    {
        return $data;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $data;
    }
}