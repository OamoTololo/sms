<?php

class User extends Model
{
    protected $table = "USERS";

    public function validate($data)
    {
        $this->errors = [];

        if ($data['password'] != $data['retyped_password']) {
            $this->errors['password'] = "Passwords do not match";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        
        return false;
    }
}