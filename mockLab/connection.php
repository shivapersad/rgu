<?php

    $servername = "eu-cdbr-azure-north-d.cloudapp.net";
    $username = "bc824cb00f45cd";
    $password = "30e5b1c4";

    if (!$conn = mysqli_connect($servername,$username,$password))
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";