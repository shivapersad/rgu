<?php

    include_once('connection.php');

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
    <?
        if ($_SERVER['REQUEST_METHOD'] === 'GET')
        {
    ?>
            <form action="<? {$_SERVER['PHP_SELF'];} ?>" method="post">
                <table>
                    <tr>
                        <td><label for="bugname">Bug Name</label></td>
                        <td><input type="text" id="bugname" name="bugname" placeholder="Bug Name" required></td>
                    </tr>
                    <tr>
                        <td><label for="bugsummary">Bug Summary</label></td>
                        <td><textarea id="bugsummary" name="bugsummary" rows="5" cols="25" required></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="bugcategory">Bug Category</label></td>
                        <td>
                            <select id="bugcategory" required>
                                <option value="android">Android</option>
                                <option value="ios">iOS</option>
                                <option value="windows">Windows</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td id="right" colspan="2"><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
            <?
        }
                elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    $sql = "INSERT INTO bugs VALUES (NULL,'$bugname','$bugsummary','$bugcategory')";
                    mysqli_query($db,$sql);
                    redirect('Location: showbugs.php');
                }
                else
                {
                    redirect('Location: index.php');
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