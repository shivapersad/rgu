<?php
	
	include_once("database_functions.php");
	include_once("functions.php");
	
	$connection = db_connection();
	
	

?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	
		<title>Calculator Web App - Register an account</title>
	</head>
	
	<body>
		
		<h1>Calculator Web App</h1>
		
		<h2>Register an account</h2>
		
		<form action="calculator_register.php" method="post">
			<table>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname" value="" required /></td>
				</tr>
				
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname" value="" required /></td>
				</tr>
				
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="male" required />Male</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="gender" value="female" />Female</td>
				</tr>
				
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="dob" value="1970-01-01" required /></td>
				</tr>
				
				<tr>
					<td>Email Address:</td>
					<td><input type="email" name="emailAddress" value="" required /></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pwd1" value="" required /></td>
				</tr>
				
				<tr>
					<td>Confirm password:</td>
					<td><input type="password" name="pwd2" value="" required /></td>
				</tr>
				
				<tr colspan=2>
					<td><input type="submit" value="Register" /></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>

<?php

	close_connection($connection);
	
?>