<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['title']) AND strlen($_POST['title']) != 0)
;

if ($checklist == true)
{
	Marital::$params = $_POST;

	$status = Marital::create();

	//var_dump($status);

	header('Location: ' . BASE . 'setting/marital');
}

?>
