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

    $qry = "SELECT * from users";
    $result = $connection->query($qry);

    while ($row = mysqli_fetch_assoc($result))
    {
        echo "Username: " . $row["username"];
        echo "Password: " . $row["password"];
        echo "Inside Loop <br>";
    }

    mysqli_free_result($result);

    echo "Result freed <br>";
?>