<?php

    include_once("connection.php");

    if ($connection -> connect_errno)
    {
        die ('Connect failed: ' . $connection->connect_errno);
    }

    $sql = "SELECT * FROM bugs";

    if ($result = !mysqli_query($connection,$sql))
    {
        echo "Error: " . mysqli_error($connection);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BugTracker</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="unsemantic-grid-responsive-tablet.css">
</head>
<body>

<div class="grid-container center">
    <header>
        <div class="logo">
            <img src="logo.png">
        </div>
        <h1>BugTracker</h1>
        <h2>Keeping track of all the pesky little bugs</h2>
    </header>

    <br>

    <nav class="grid-10">
        <ul>
            <li><a href="showbugs.php">All Bug Items</a></li>
            <li><a href="showbugs.php">Android Bugs</a></li>
            <li><a href="showbugs.php">iOS Bugs</a></li>
            <li><a href="showbugs.php">Windows Bugs</a></li>
            <li><a href="addbugs.php">Insert Bug</a></li>
        </ul>
    </nav>

    <div class="grid-90">
        <?php
            $row = mysqli_fetch_assoc($result);
            foreach ($row as $bug)
            {
                echo "<p class=\"bold\">" . $bug->bugName . "</p>";
                echo "<p class=\"italics\">" . $bug->BugCategory . "</p>";
                echo "<p>" . $bug->BugSummary . "</p>";
            }
        ?>
    </div>

    <footer class="grid-100">
        Designed by Shiva Persad 2016
    </footer>
</div>
</body>
</html>