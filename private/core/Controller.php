<?php
/*
 * This file is part of the Student Management System Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) NtwanaSosha
 */
class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        if (file_exists('../private/views/' . $view . '.php')) {
            require'../private/views/' . $view . '.php';
        } else {
            require'../private/views/404.php';
        }
    }

    public function loadModel($model): Model
    {
        if (file_exists('../private/models/' . ucfirst($model) . '.php')) {
            require'../private/models/' . ucfirst($model) . '.php';
            return $model = new $model();
        }

        return false;
    }
}