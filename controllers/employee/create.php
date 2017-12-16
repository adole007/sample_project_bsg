<?php

var_dump($_POST);

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['esn']) AND strlen($_POST['esn']) != 0)
	AND (isset($_POST['status']) AND strlen($_POST['status']) != 0)
	
	AND (isset($_POST['surname']) AND strlen($_POST['surname']) != 0)
	AND (isset($_POST['firstname']) AND strlen($_POST['firstname']) != 0)
	//AND (isset($_POST['middlename']) AND strlen($_POST['middlename']) != 0)
	//changeofname
	AND (isset($_POST['gender']) AND strlen($_POST['gender']) != 0)
	AND (isset($_POST['surname_f']) AND strlen($_POST['surname']) != 0)
	AND (isset($_POST['firstname_f']) AND strlen($_POST['firstname']) != 0)
	//AND (isset($_POST['middlename_f']) AND strlen($_POST['middlename']) != 0)
	AND (isset($_POST['dob']) AND strlen($_POST['dob']) != 0)
	AND (isset($_POST['pob']) AND strlen($_POST['pob']) != 0)
	AND (isset($_POST['address_c']) AND strlen($_POST['address_c']) != 0)
	AND (isset($_POST['address_p']) AND strlen($_POST['address_p']) != 0)
	
;

if ($checklist == true)
{


	//	header('Location: ../employee.php');
}

?>
