<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die ('Connect failed: ' . $db->connect_errno);
    }

    $sql = "SELECT * FROM bugs";

    $result = mysqli_query($db,$sql);

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
            while ($row = $result->fetch_array())
            {
                echo "<p class=\"bold\">" . $row['bugName'] . "</p>";
                echo "<p class=\"italics\">" . $row['BugCategory'] . "</p>";
                echo "<p>" . $row['BugSummary'] . "</p>";
                echo "<hr size=4>";
            }
        ?>
    </div>

    <footer class="grid-100">
        Designed by Shiva Persad 2016
    </footer>
</div>
</body>
</html>