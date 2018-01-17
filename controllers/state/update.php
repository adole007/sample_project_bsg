<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
	AND (isset($_POST['state']) AND strlen($_POST['state']) != 0)
;

if ($checklist == true)
{
	State::$params = $_POST;

	$status = State::update();

	header('Location: ' . BASE . 'setting/states');
}

?>
