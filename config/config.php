<?php

//start session
session_start();

//base url
define('BASE', 'http://localhost/projectbsg/');

//controller url
define('CONTROLLER', 'http://stigwue/projectbsg/controllers/');

//db configs
define('SERVER', 'localhost');
define('USER', 'user');
define('PASSWORD', 'password');
define('DB', 'bsg');

//global variables
global $DB_CONN;

//other files
require_once(__DIR__ . '/alert.php');
?>