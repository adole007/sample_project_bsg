<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
	AND (isset($_POST['title']) AND strlen($_POST['title']) != 0)
;

if ($checklist == true)
{
	Mda::$params = $_POST;

	$status = Mda::update();

	header('Location: ' . BASE . 'setting/mdas');
}

?>
