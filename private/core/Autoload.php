<?php

require_once 'Config.php';
require_once 'Controller.php';
require_once 'SmsDB.php';
require_once 'Model.php';
require_once 'App.php';

spl_autoload_register(function ($class) {
    require "../private/models/" . ucfirst($class) . ".php";
});