<?php

  // 1. Create a database connection
  $dbhost = "localhost";
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
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Calculator Web App</title>
	</head>
	
	<body>
		<h1>Calculator Web Application</h1>
		
		<h3>Result</h3>
		
		<p>Expression: &nbsp;
		<?php
		
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
							$result = $num1 / $num2;
				break;
				
				case "pow": $symbol = " ^ ";
							$result = pow($num1,$num2);
				break;
			}
			
			$expression = $num1 . " " . $symbol . " " . $num2;
			
			echo $expression . " = " . $result;
			
			$query = "INSERT INTO results VALUES (now(),";
			$query .= "{$expression},{$result}";
			$query .= ")";
			
			$result = mysqli_query($connection, $query);
			
			if (!$result) 
			{
					die("Database query failed. " . mysqli_error($connection));
			}
			
		?>
		</p>
		
		<a href="calc_history.php">Calculator History</a>
		<a href="calculator.php">Perform another calculation</a>
		
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>