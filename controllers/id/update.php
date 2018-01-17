<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
	AND (isset($_POST['type']) AND strlen($_POST['type']) != 0)
;

if ($checklist == true)
{
	Id::$params = $_POST;

	$status = Id::update();

	header('Location: ' . BASE . 'setting/ids');
}

?>
