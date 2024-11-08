<?php

class User extends Model
{
    protected $table = "USERS";

    public function validate($data)
    {
        $this->errors = [];

        if (!empty($data['name']) || !empty($data['surname']) || !empty($data['username']) || !empty($data['date']) ||
            !empty($data['url_address']) || !empty($data['gender']) || !empty($data['email']) || !empty
            ($data['role']) ||
            !empty($data['password']) || !empty($data['retyped_password'])) {
            if (!preg_match("/^[a-zA-Z]+$/", $data['name']) || !preg_match("/^[a-zA-Z]+$/", $data['surname'])) {
                $this->errors['name'] = "Only characters are allowed";
                $this->errors['surname'] = "Only letters are allowed";
            }

            if (!preg_match("/^[a-zA-Z0-9]+$/", $data['username'])) {
                $this->errors['username'] = "Only letters and numbers are allowed";
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

            if (!preg_match("/^[a-zA-Z0-9]+$/", $data['password'])) {
                $this->errors['password'] = "Only letters and numbers are allowed";
            }

            if ($data['password'] != $data['retyped_password']) {
                $this->errors['password'] = "Passwords do not match";
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
}