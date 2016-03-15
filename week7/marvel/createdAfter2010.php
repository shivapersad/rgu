<?php
    include_once("connection.php");

    $sql = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
    $result = mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Marvel Movies</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <h1>Marvel Movies Database</h1>

    <h2>Display All Movies created after 2010</h2>

    <table>
        <tr>
            <th>Marvel Movie ID</th>
            <th>Release Year</th>
            <th>Title</th>
            <th>Production Studio</th>
            <th>Notes</th>
        </tr>
        <?php
            while ($row = $result -> fetch_array())
            {
                echo "<tr>";
                echo "<td>" . $row['marvelMovieID'] . "</td>";
                echo "<td>" . $row['yearReleased'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['productionStudio'] . "</td>";
                echo "<td>" . $row['notes'] . "</td>";
            }
        ?>
    </table>

    <footer>Copyright 2016</footer>

    </body>
</html>
