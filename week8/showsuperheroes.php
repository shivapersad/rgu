<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die ('Connect failed: ' . $db->connect_errno);
    }

    $sql = "SELECT * FROM superheroes";

    $result = mysqli_query($db,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 8 - Superhero Management System</title>
</head>

    <body>

        <header>
            <h1>Superhero Management System</h1>
            <h2>Display all Superheroes</h2>
            
            <ul>
                <li><a href="superheroform.html">Add a Superhero</a></li>
                <li><a href="showsuperheroes.php">Display all Superheroes</a></li>
                <li><a href="battle.php">Insert Battle Information</a></li>
                <li><a href="displayBattles.php">Display Battles</a></li>
            </ul>

            <img src="assets/images/superheroes2.png" />
        </header>

        <main>
            <div>
                <h2>Display all Superheroes</h2>

                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Main Superpower</th>
                    </tr>
                    <?php
                        while ($row = $result->fetch_array())
                        {
                            echo "<tr>";
                            echo "<td>";echo $row['firstName'];echo "</td>";
                            echo "<td>";echo $row['lastName'];echo "</td>";
                            echo "<td>";echo $row['mainSuperpower'];echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>

        </main>

        <br><br>

        <footer>Superhero Management System</footer>

    </body>

</html>

<?php
    mysqli_close($db);
?>