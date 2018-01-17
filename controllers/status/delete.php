<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
;

if ($checklist == true)
{
	Status::$params = $_POST;

	$status = Status::delete();

	header('Location: ' . BASE . 'setting/status');
}

?>
