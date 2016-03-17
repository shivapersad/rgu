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

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

?>