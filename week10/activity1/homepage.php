<?php

    session_start();
    $username = $_COOKIE['username'];
    $access_level = $_COOKIE['access_level_cookie'];

    function displayAccessLevelInformation($accessLevel)
    {
        if ($accessLevel == "standarduser")
        {
            $message = "<p style =\"background-color:lightgreen\">You are currently logged in as a standard user</p>";
        }
        elseif ($accessLevel == "root")
        {
            $message = "<p style =\"background-color:red\">You are currently logged in as a root user</p>" . "<p style =\"background-color:red\">You now have access to additional administrative features</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions and Cookies - Homepage</title>
</head>
<body>

    <h1>Welcome <?php echo $username; ?></h1><br>

    <?php echo $message; ?>

</body>
</html>
