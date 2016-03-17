<?php

    include_once("connection.php");

    $username = $_POST["uname"];
    $password = $_POST["pword"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) == 1)
    {
        $arr = mysqli_fetch_assoc($result);
        $id = $arr['id'];
        header("location: members.php?id=$id");
    }
    else
        {
            $message = "Incorrect username or password. Please return to try again.";
        }

    mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cristars Badminton Club</title>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>

<header>
    <!-- <h1>Cristars Badminton Club</h1> -->
    <img src="assets/images/logo.jpg" alt="Cristars Badminton Club"/>

    <div id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About the Club</a></li>
            <li><a href="login.php">Members Sign In</a></li>
            <li><a href="players.html">Our Players</a></li>
        </ul>
    </div>

</header>

<main>

    <section>
        <h2>Cristars Badminton Club</h2>

        <h3>Members Login</h3>

        <?php echo $message; ?>

        <form method="post" action="checkLogin.php">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="uname" placeholder="username" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pword" placeholder="password" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login" /></td>
                </tr>
            </table>
        </form>

        <br><br>

        <a href="newMember.php">Create new user</a>

        <br>

        <a href="forgotPassword.php">Forgot your password?</a>
    </section>
</main>

<br>

<footer>&copy;2016 Cristars Badminton Club</footer>

</html>
