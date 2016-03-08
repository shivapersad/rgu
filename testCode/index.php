<?php

    $servername = "eu-cdbr-azure-north-d.cloudapp.net";
    $username = "bc824cb00f45cd";
    $password = "30e5b1c4";
    $dbname = "rgu-mysqldb";

    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if ($connection -> connect_error)
    {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "Connected successfully <br>";

    $qry = "SELECT * from users";
    $result = mysqli_query($connection,$qry);

    echo print_r($result);
    echo "<br>";

    /* while ($row = mysqli_fetch_assoc($result))
    {
        echo "Username: " . $row["username"];
        echo "Password: " . $row["password"];
        echo "Inside Loop <br>";
    } */

    mysqli_free_result($result);
    echo "Result freed <br>";

    mysqli_close($connection);
    echo "Connection closed";


?>