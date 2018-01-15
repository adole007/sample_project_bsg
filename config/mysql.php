<?php

class Database
{
	/*private $_server;
	private $_user;
	private $_password;
	private $_database;*/

	public static $conn = null;

	public static function doConnect($server, $user, $password, $database)
	{
		Self::$conn = new mysqli($server, $user, $password, $database);
		if (Self::$conn->connect_errno <= 0)
		{
			//echo $conn->host_info . "\n";
			//Self::getMessage($conn, 'Database opened', 500);
		}
		else
		{
			Self::$conn = null;
			//Self::getMessage(null, $conn->connect_error, $conn->connect_errno);
		    //echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
		}

		return Self::$conn;
	}

	//crud

	//create isn't done from our code

	//read
	public static function doRead($statement)
	{
		$conn = Self::$conn;
		$result_set = array();
		if($conn->connect_errno <= 0)
	    {
	        if ($statement->execute())
	        {
	        	$result = $statement->get_result();
	        	while ($row = $result->fetch_assoc())
	        	{
			        $result_set[] = $row;
			    }
	            $statement->free_result();
	        }
	    }
	    return $result_set;
	}

	//insert
	public static function doInsert($statement)
	{
		$conn = Self::$conn;
		$created = 0;
		if($conn->connect_errno <= 0)
        {
            //$statement = $conn->prepare("INSERT INTO tblnav (title, link, `index`) VALUES (?, ?, ?)");
            //$statement->bind_param('ssi', $this->title, $this->link, $this->index);

            if ($statement->execute())
            {
                $statement->free_result();
                $created = $conn->insert_id;
            }
        }
        return $created;
	}

	//update
	public static function doUpdate($statement)
	{
		$conn = Self::$conn;
		if ($conn->connect_errno <= 0)
        {
            if ($statement->execute())
            {
                $statement->free_result();
                return TRUE;
            }
        }
        return FALSE;
	}

	//delete
	public static function doDelete($statement)
	{
		$conn = Self::$conn;
		if ($conn->connect_errno <= 0)
        {
            if ($statement->execute())
            {
                $statement->free_result();
                return TRUE;
            }
        }
        return FALSE;
	}

}

?>
