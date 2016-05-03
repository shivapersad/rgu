<?php

    define('DB_SERVER','eu-cdbr-azure-north-d.cloudapp.net');
    define('DB_USERNAME','bc824cb00f45cd');
    define('DB_PASSWORD','30e5b1c4');
    define('DB_DATABASE','rgu-mysqldb');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);