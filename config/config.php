<?php

//start session
session_start();

//base url
define('BASE', 'http://localhost/projectbsg/');

//controller url
define('CONTROLLER', 'http://localhost/projectbsg/controllers/');

//db configs
define('SERVER', 'localhost');
define('USER', 'user');
define('PASSWORD', 'password');
define('DB', 'bsg');

//other files
require_once(__DIR__ . '/alert.php');
require_once(__DIR__ . '/mysql.php');

if (is_null(Database::$conn))
{
    $conn = Database::doConnect(SERVER, USER, PASSWORD, DB);

    if (is_null($conn))
    {
        Alert::setMessage('error', 'Database connection failed');
    }
    else
    {
        //$_SESSION['hrify_db'] = Database::$conn;
        //Alert::setMessage('success', 'Database connected');
    }
}

//models
require_once(__DIR__ . '/../models/autoload.php');
?>