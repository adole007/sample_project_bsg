<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['title']) AND strlen($_POST['title']) != 0)
;

if ($checklist == true)
{
	Mda::$params = $_POST;

	$status = Mda::create();

	//var_dump($status);

	header('Location: ' . BASE . 'setting/mdas');
}

?>
