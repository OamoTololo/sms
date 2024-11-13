<?php
session_start();
class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }

    public static function loggedIn(): bool
    {
        return isset($_SESSION['USER']);
    }

    public static function user()
    {
        return $_SESSION['USER']->name ?? false;
    }
    public static function logout()
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }
    public static function __callStatic($method, $args)
    {
        $property = strtolower(str_replace('get', '', $method));

        if (isset($_SESSION['USER']->{$property})) {
            return $_SESSION['USER']->$property;
        }
        return 'Unknown';
    }

}