<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "spersad" && $password == "password-1")
    {
        setcookie('username','spersad');
        setcookie('access_level','standarduser');
    }

    header('Location: homepage.php');