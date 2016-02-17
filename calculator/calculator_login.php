<?php
	
?>


<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	
		<title>Calculator Web App - Login Page</title>
	</head>

	<body>
		
		<h1>Calculator Web App</h1>
		
		<h2>Login Page</h2>
		
		<form action="calculator_login.php" method="post">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" /></td>
				</tr>
				<tr colspan=2>
					<td><input type="submit" value="Submit" /></td>
				</tr>
			</table>
		</form>
		
		<br>
		
		<a href="calculator_register.php">Register for an account</a>
		
	</body>
	
</html>