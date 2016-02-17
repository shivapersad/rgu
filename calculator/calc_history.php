<?php

	// 1. Create a database connection
	/* $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "calculator";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Test if connection occurred.
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
		);
	} */
	
	require_once("database_functions.php");
	
	$connection = db_connection();
?>

<?php

	$query = "SELECT * FROM results ORDER BY date_time ASC";
	$result = mysqli_query($connection,$query);

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Calculator Web App - History</title>

	</head>

    <body>
        <h1>Calculator Web Application</h1>

        <h2>Calculator History</h2>
			
			<table>
				<tr>
					<th>Date and Time</th>
					<th>Expression</th>
					<th>Result</th>
				</tr>
				
				<?php
				
					while ($history = mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>" . $history["date_time"] . "</td>";
						echo "<td>" . $history["expression"] . "</td>";
						echo "<td>" . $history["result"] . "</td>";
						echo "</tr>";
					}
				
				?>
				
			</table>
        
		<br>
		
		<a href="calculator.php">Perform another calculation</a>
		
    </body>
</html>

<?php
// 5. Close database connection
mysqli_close($connection);
?>