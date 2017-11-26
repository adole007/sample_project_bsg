require_once 'db_connection.php';

function MultiQuery($quries)
{
	$conn = OpenCon();
	
	
	if($conn->multi_query($quries) === true)
	{
		CloseCon($conn);
		return true;
	}
	else
	{
		return $conn->error;
	}
}