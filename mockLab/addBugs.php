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

        <?php

            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                echo "
                <div class=\"grid-75\" >
                    <form class=\"input-form\" action='{$_SERVER['PHP_SELF']}' method='post' >
    
                        <div class=\"field\" >
                            <label> Bug Name </label>
                            <input type = \"text\" name = \"bugName\" placeholder = \"Bug Name\" autofocus required >
                        </div>
                        <div class=\"field\" >
                            <label> Bug Summary </label>
                            <textarea rows = \"5\" cols = \"50\" name = \"bugSummary\" placeholder = \"Bug Summary\" required ></textarea>
                        </div>
                        <div class=\"field\">
                            <label> Bug Category </label>
                            <select name = \"bugCategory\" required>
                                <option value = \"android\" selected > Android</option>
                                <option value = \"ios\" > iOS</option>
                                <option value = \"windows\" > Windows</option>
                            </select>
                        </div>
                        <div id = \"btnRight\">
                            <input type = \"submit\" value = \"Submit\">
                        </div>
                    </form>
                </div>";
            }
            elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    include_once('connection.php');

                    $bugName = $_POST['bugName'];
                    $bugSummary = $_POST['bugSummary'];
                    $bugCategory = $_POST['bugCategory'];

                    $sql = "INSERT INTO bugs VALUES (NULL,'$bugName','$bugSummary','$bugCategory')";
                    mysqli_query($conn,$sql);

                    mysqli_close($conn);
                    
                    header('Location: bugs.php');
                }
            else
                {
                    header('Location: bugs.php');
                }

        ?>
    </main>

    <footer class="grid-75">Designed by Shiva Persad, 2016</footer>

</div>


</body>
</html>