<?php

	function db_connection()
	{

		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "root";
		$dbname = "calculator";
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		// Test if connection occurred.
		if(mysqli_connect_errno()) 
		{
			die("Database connection failed: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_errno() . ")"
			);
		}
		
		return $connection;
	}
	
	function add_user($fname,$lname,$gender,$dob,$emailAddress,$pwd)
	{
		$uid = generateUID();
		
		$query = "INSERT INTO users (firstName,lastName,gender,dateOfBirth,emailAddress,password) VALUES (";
		$query .= "";
		$query .= ")";
			
		$result = mysqli_query($connection, $query);
			
		if (!$result) 
		{
			die("Database query failed. " . mysqli_error($connection));
		}
	}
	
	function close_connection($connection)
	{
		
		mysqli_close($connection);
		
	}

?>