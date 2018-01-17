<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['type']) AND strlen($_POST['type']) != 0)
;

if ($checklist == true)
{
	Id::$params = $_POST;

	$status = Id::create();

	//var_dump($status);

	header('Location: ' . BASE . 'setting/ids');
}

?>
