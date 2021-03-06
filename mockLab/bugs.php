<?php

    include_once('connection.php');

    if ($conn -> connect_errno)
    {
        die ('Connect failed: ' . $conn->connect_errno);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="unsemantic-grid-responsive-tablet.css">
</head>
<body>

<div class="grid-container">

    <header class="grid-75">
        <img src="logo.png" id="image" class="grid-25">
        <div class="grid-75">
            <h1>BugTracker</h1>
            <p id="subtitle">Keeping track of all the pesky little bugs</p>
        </div>
    </header>

    <main class="grid-75">
        <div id="navigation" class="grid-25">
            <ul>
                <li><a href="bugs.php?bugCategory=all">All Bug Items</a></li>
                <li><a href="bugs.php?bugCategory=android">Android Bugs</a></li>
                <li><a href="bugs.php?bugCategory=ios">iOS Bugs</a></li>
                <li><a href="bugs.php?bugCategory=windows">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </div>

        <div class="grid-75">
            <?php

                if ($_GET['bugCategory'] == "all")
                {
                    $sql = "SELECT * FROM bugs";
                }
                else
                    {
                        $bugCategory = $_GET['bugCategory'];
                        $sql = "SELECT * FROM bugs WHERE bugCategory='$bugCategory'";
                    }

                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<p>Bug Name: " . $row["bugName"] . "</p>";
                        echo "<p>Bug Category: " . $row["bugCategory"] . "</p>";
                        echo "<p>Bug Summary: <br>" . $row["bugSummary"] . "</p>";
                        echo "<hr>";
                    }
                }
                else
                    {
                        echo "No bugs found. Yay!";
                    }

            ?>

            <!--
            <p>Bug Name: StageFright</p>
            <p>Bug Category: Android</p>
            <p>
                Bug Summary: <br>
                Stagefright is the collective name for a group of software bugs, that affect versions
                2.2 and newer of the Android operating system, allowing an attacker to perform arbitrary operations
                on the victim device through remote code execution and privilege escalation.
            </p>

            <hr>

            <p>Bug Name: Dr Crabbs Evil Bug</p>
            <p>Bug Category: iOS</p>
            <p>
                Bug Summary: <br>
                The DCEB is a very powerful and fictional bug that infects iOS devices and does absolutely nothing
                at all. Its only purpose is to provide dummy data for assessed labs
            </p>

            <hr>

            <p>Bug Name: MicroHard Bug</p>
            <p>Bug Category: Windows</p>
            <p>
                Bug Summary: <br>
                The MicroHard bug infects windows machines and makes them harder to use. So hard to use infact that
                it renders them more useless than they would be in the first place.
            </p>
            -->

        </div>
    </main>

    <footer class="grid-75">Designed by Shiva Persad, 2016</footer>

</div>

</body>
</html>

<?php

    mysqli_close($conn);

?>