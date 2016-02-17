<?php
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "calculator";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Test if connection occurred.
	if(mysqli_connect_errno()) 
	{
		die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}
	
	$error = false;
	
	if (isset($_POST["submit"]))
	{
		$symbol;
		$result;
		$expression;
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		
		switch ($_POST['operation'])
		{
			case "add": $symbol = " + ";
						$result = $num1 + $num2;
			break;
			
			case "sub": $symbol = " - ";
						$result = $num1 - $num2;
			break;
			
			case "mul": $symbol = " * ";
						$result = $num1 * $num2;
			break;
			
			case "div": $symbol = " / ";
						if ($num2 != 0)
						{
							$result = $num1 / $num2;
							$result = number_format($result, 2, '.', '');
						}
						else
							{
								$message = "Unable to divide by 0";
								$error = true;
							}
						
			break;
			
			case "pow": $symbol = " ^ ";
						$result = pow($num1,$num2);
			break;
		}
		
		$expression = $num1 . " " . $symbol . " " . $num2;
		
		if (!$error)
		{
			$query = "INSERT INTO results VALUES (now(),";
			$query .= "'{$expression}',{$result}";
			$query .= ")";
				
			$addRecord = mysqli_query($connection, $query);
				
			if (!$addRecord) 
			{
					die("Database query failed. " . mysqli_error($connection));
			}
		}
		
	}
	
	// Query database for previous results
	$query = "SELECT * FROM results ORDER BY date_time ASC";
	$resultSet = mysqli_query($connection,$query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Calculator Web App</title>
	</head>
	
	<body>
		<h1>Calculator Web Application</h1>
		
		<form action="calculator_single.php" method="post">
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
		
		<?php
			
			if (isset($_POST["submit"]) && (!$error))
			{
				echo "<p>Expression: " . $expression . "</p>";
				echo "<p>Result: " . $result . "</p>";
				
			}
			elseif (isset($_POST["submit"]) && ($error))
				{
					echo "<p>". $message . "</p>";
				}
				
		?>
		
		<br>
		
		<h2>Calculator History</h2>
		
		<table>
			<tr>
				<th>#</th>
				<th>Date and Time</th>
				<th>Expression</th>
				<th>Result</th>
			</tr>
			
		<?php
			
			$i = 1;
			
			while ($history = mysqli_fetch_assoc($resultSet))
			{
				echo "<tr>";
				echo "<td>" . $i . "</td>";
				echo "<td>" . $history["date_time"] . "</td>";
				echo "<td>" . $history["expression"] . "</td>";
				echo "<td>" . $history["result"] . "</td>";
				echo "</tr>";
				$i++;
			}
		
		?>
				
		</table>
		
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>
