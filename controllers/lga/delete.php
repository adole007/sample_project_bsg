<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
;

if ($checklist == true)
{
	Lga::$params = $_POST;

	$status = Lga::delete();

	header('Location: ' . BASE . 'setting/lgas');
}

?>
