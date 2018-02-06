<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
	AND (isset($_POST['state_id']) AND strlen($_POST['state_id']) != 0)
	AND (isset($_POST['lga']) AND strlen($_POST['lga']) != 0)
;

if ($checklist == true)
{
	Lga::$params = $_POST;

	$status = Lga::update();

	header('Location: ' . BASE . 'setting/lgas');
}

?>
