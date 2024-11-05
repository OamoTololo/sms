<?php
/*
 * This file is part of the Student Management System Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) NtwanaSosha
 */
class App
{
    protected $controller = 'HomeController'; // Default controller, can be changed dynamically
    protected string $method = 'index';   // Default method
    protected array $params = [];         // Default params

    public function __construct()
    {
        $URL = $this->getUrl();

        // Check if the controller file exists based on the URL
        if (isset($URL[0]) && file_exists('../private/controllers/' . ucfirst($URL[0]) . '.php')) {
            $this->controller = ucfirst($URL[0]);  // Capitalize the first letter of the controller name
            unset($URL[0]);  // Remove the controller part from the URL
        } else {
            die("Controller {$this->controller} does not exist.");
        }

        // Require the controller file
        require "../private/controllers/{$this->controller}.php";

        // Instantiate the controller class
        if (class_exists($this->controller)) {
            $controllerClass = new $this->controller;
            $this->controller = new $controllerClass();
        } else {
            die("Controller does not exist.");
        }

        // Check for the method to call
        if (isset($URL[1]) && method_exists($this->controller, $URL[1])) {
            $this->method = ucfirst($URL[1]);
            unset($URL[1]);  // Remove the method part from the URL
        }

        $URL = array_values($URL);

        $this->params = $URL;
        // Call the method with parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function getUrl(): array
    {
        $url = $_GET['url'] ?? 'HomeController';  // Default URL is empty if not set
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));  // Split the URL into parts
    }
}