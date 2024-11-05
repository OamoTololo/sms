<?php
/*
 * This file is part of the Student Management System Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) NtwanaSosha
 */

//require_once 'controller.php'; // Adjust the path if needed
//require_once '../controllers/homeController.php';
class app
{
    protected string $controller = 'homeController';
    protected string $method = 'index';
    protected array $params = [];
    public function __construct()
    {
        $URL = $this->getUrl();

        if (file_exists('../private/controllers/' . $URL[0] . '.php')) {
            $this->controller = $URL[0];
        }

        require "../private/controllers/{$this->controller}.php";

        $this->controller = new $this->controller;
    }
    private function getUrl()
    {
        $url = $_GET['url'] ?? 'homeController';
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}