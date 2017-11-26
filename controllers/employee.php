<?php

switch ($_POST['selector'])
{
	case 'employee.create':
		//emploee create code

		if (isset($_POST['surname']) AND strlen($_POST['surname']) != 0)
		{
			

			header('Location: ../employee.php');
		}
	break;


	case 'employee.edit':

	break;

	default:

	break;

}

?>