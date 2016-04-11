<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "spersad" && $password == "password-1")
    {
        $_SESSION['username'] = $username;
        $_SESSION['access_level'] = "standarduser";
    }

    header('Location: homepage.php');