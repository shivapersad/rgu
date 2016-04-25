<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die ('Connect failed: ' . $db->connect_errno);
    }

    $bugcategory = $_GET["bugCategory"];

    if ($bugcategory == "all")
    {
        $sql = "SELECT * FROM bugs";
    }
    else
        {
            $sql = "SELECT * FROM bugs WHERE BugCategory = '$bugcategory'";
        }

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
            <li><a href="showbugs.php?bugCategory=all">All Bug Items</a></li>
            <li><a href="showbugs.php?bugCategory=Android">Android Bugs</a></li>
            <li><a href="showbugs.php?bugCategory=iOS">iOS Bugs</a></li>
            <li><a href="showbugs.php?bugCategory=Windows">Windows Bugs</a></li>
            <li><a href="addbugs.php">Insert Bug</a></li>
        </ul>
    </nav>

    <div class="grid-90">
        <?php
            while ($row = $result->fetch_array())
            {
                echo "<p class=\"bold\">" . $row['bugName'] . "</p>";
                switch ($row['BugCategory']){
                    case "android": $bugCategory = "Android";
                        break;
                    case "ios": $bugCategory = "iOS";
                        break;
                    case "microsoft": $bugCategory = "Microsoft";
                        break;
                    default: break;
                }
                echo "<p class=\"italics\">" . $bugCategory . "</p>";
                echo "<p>" . $row['BugSummary'] . "</p>";
                echo "<hr>";
            }
        ?>
    </div>

    <footer class="grid-100">
        Designed by Shiva Persad 2016
    </footer>
</div>
</body>
</html>

<?php

    mysqli_close($db);

?>