<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
;

if ($checklist == true)
{
	Marital::$params = $_POST;

	$status = Marital::delete();

	header('Location: ' . BASE . 'setting/marital');
}

?>
