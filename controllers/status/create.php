<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['title']) AND strlen($_POST['title']) != 0)
;

if ($checklist == true)
{
	Status::$params = $_POST;

	$status = Status::create();

	//var_dump($status);

	header('Location: ' . BASE . 'setting/status');
}

?>
