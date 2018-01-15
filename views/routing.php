<?php

$action = 'default';
$context = 'list';
$param1 = null;

if (isset($_GET['action']))
{
    $action = $_GET['action'];
}

if (isset($_GET['context']))
{
    $context = $_GET['context'];
}

if (isset($_GET['param1']))
{
    $param1 = $_GET['param1'];
}

?>
