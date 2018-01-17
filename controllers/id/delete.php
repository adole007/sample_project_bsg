<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['type']) AND strlen($_POST['type']) != 0)
;

if ($checklist == true)
{
	Id::$params = $_POST;

	$status = Id::delete();

	header('Location: ' . BASE . 'setting/ids');
}

?>
