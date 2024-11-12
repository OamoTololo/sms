<?php

class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }

    public static function loggedIn(): bool
    {
        if (isset($_SESSION['USER'])) {
            return true;
        }
        return false;
    }
    public static function logout($row)
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }
}