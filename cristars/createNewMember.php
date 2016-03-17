<?php

    include_once("connection.php");

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $handedness = $_POST['handedness'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // insert username and password into users table
    $sql = "INSERT INTO users VALUES (NULL,'$username','$password')";
    $result = mysqli_query($db,$sql);

    $message = "User successfully created!";
    // query the database for the AUTO INCREMENT value used for the last insert query

    $sql = "SELECT `AUTO_INCREMENT`
            FROM  INFORMATION_SCHEMA.TABLES
            WHERE TABLE_SCHEMA = 'db_cristars'
            AND   TABLE_NAME   = 'users'";

    $result = mysqli_query($db,$sql);
    $arr = mysqli_fetch_assoc($result);
    $id = $arr["AUTO_INCREMENT"];

    // Print_r($auto_increment);
    // echo "<br><br><br>";
    // echo $auto_increment["AUTO_INCREMENT"];

    if ($middleName == NULL)
    {
        $middleName = "";
    }

    // insert data into members table
    $sql = "INSERT INTO members VALUES ('$id','$firstName','$middleName','$lastName','$gender','$dateOfBirth','$handedness')";
    $result = mysqli_query($db,$sql);

    $message = "The user was successfully created. Please return to the <a href='login.php'>Member Sign In</a> page to login.";

    // echo $_POST array for easier debugging of data
    // Print_R($_POST);

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

                <h3>Create New Member</h3>

                <p><?php echo $message; ?></p>

            </section>

        </main>

        <br><br>

        <footer>&copy;2016 Cristars Badminton Club</footer>

    </body>

</html>
