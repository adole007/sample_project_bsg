<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
;

if ($checklist == true)
{
	State::$params = $_POST;

	$status = State::delete();

	header('Location: ' . BASE . 'setting/states');
}

?>
