<?php

    session_start();
    $username = $_SESSION['username'];
    $access_level = $_SESSION['access_level'];

    echo "<h1>Welcome $username<br>";

    displayAccessLevelInformation($access_level);

    function displayAccessLevelInformation($accessLevel)
    {
        if ($accessLevel == "standarduser")
        {
            echo "<p style =\"background-color:lightgreen\">You are currently logged in as a standard user</p>";
        }
        elseif ($accessLevel == "root")
        {
            echo "<p style =\"background-color:red\">You are currently logged in as a root user</p>";
            echo "<p style =\"background-color:red\">You now have access to additional administrative features</p>";
        }
    }
?>