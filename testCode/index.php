<?php

    $servername = "eu-cdbr-azure-north-d.cloudapp.net";
    $username = "bc824cb00f45cd";
    $password = "30e5b1c4";

    $connection = new mysqli($servername,$username,$password);

    if ($connection -> connect_error)
    {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "Connected successfully";

    $qry = "SELECT * from users;";
    $result = $connection->query($qry);

    foreach ($result as $user)
    {
        echo "Username: " . $user["username"];
        echo "Password: " . $user["password"];
    }

?>