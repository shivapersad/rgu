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

    // query the database for the AUTO INCREMENT value used for the last insert query
    $sql = "SELECT `AUTO_INCREMENT`
            FROM  INFORMATION_SCHEMA.TABLES
            WHERE TABLE_SCHEMA = 'db_cristars'
            AND   TABLE_NAME   = 'users'";

    $result = mysqli_query($db,$sql);

    $auto_increment = mysqli_fetch_assoc($result);

    Print_R($auto_increment);

    // insert data into members table


    // echo $_POST array for easier debugging of data
    Print_R($_POST);

?>