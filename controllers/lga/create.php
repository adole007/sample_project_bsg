<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['state_id']) AND strlen($_POST['state_id']) != 0)
	AND (isset($_POST['lga']) AND strlen($_POST['lga']) != 0)
;

if ($checklist == true)
{
	Lga::$params = $_POST;

	$status = Lga::create();

	//var_dump($status);

	header('Location: ' . BASE . 'setting/lgas');
}

?>
