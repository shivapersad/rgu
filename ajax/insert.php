<?php

    define('DB_SERVER','eu-cdbr-azure-north-d.cloudapp.net');
    define('DB_USERNAME','bc824cb00f45cd');
    define('DB_PASSWORD','30e5b1c4');
    define('DB_DATABASE','rgu-mysqldb');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if ($db -> connect_errno)
    {
        die ('Connect failed: ' . $db->connect_errno);
    }
    else
        {
            $val = $_GET['value'];
            $sql = "INSERT INTO ajax VALUES (NULL,'$val')";
            $result = mysqli_query($db,$sql);
            echo "Success";
        }

    mysqli_close($db);

