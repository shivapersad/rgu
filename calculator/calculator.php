<!DOCTYPE html>
<html>
	<head>
		<title>Calculator Web App</title>
	</head>
	
	<body>
		<h1>Calculator Web Application</h1>
		
		<form action="calc_processing.php" method="post">
			<table>
				<tr>
					<td>Enter a number:</td>
					<td><input type="text" name="num1" /></td>
				</tr>
				<tr>
					<td>Please choose an operation:</td>
					<td>
						<select name="operation">
							<option value="">Select arithmetic operation</option>
							<option value="add">Addition (+)</option>
							<option value="sub">Subtraction (-)</option>
							<option value="mul">Multiplication (*)</option>
							<option value="div">Division (/)</option>
							<option value="pow">To the power of (^)</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Enter a 2nd number:</td>
					<td><input type="text" name="num2" /></td>
				</tr>
				<tr colspan="2">
					<td><input type="submit" name="submit" value="Submit" /></td>
				<tr>
			</table>
		</form>
		
		<a href="calc_history.php">Calculator History</a>
		
	</body>
</html>
