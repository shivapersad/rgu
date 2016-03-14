<?php

include("connection.php");

if (!empty($_POST["username"]) && !empty($_POST["password"]))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users VALUES (NULL,'$username','$password')";
    $result = mysqli_query($db,$sql);

    echo "User successfully created";
}
else
{
    echo "Enter username and password to create a user";
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>PHP Login Form with Session</h1>
<div class="loginbox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="addUser.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" /><br><br>
        <input type="submit" name="submit" value="login" />
    </form>
</div>
</body>
</html>