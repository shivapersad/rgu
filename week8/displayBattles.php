<?php

    include_once('connection.php');

    if ($db->connect_errorno)
    {
        die('Connected failed: ' . $db->connect_errno);
    }

    $sql = "SELECT * FROM superherobattles";

    $result = mysqli_query($db,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero Management System</title>
</head>

    <body>
    
        <header>
            <h1>Superhero Management System</h1>
            
            <ul>
                <li><a href="superheroform.html">Add a Superhero</a></li>
                <li><a href="showsuperheroes.php">Display all Superheroes</a></li>
                <li><a href="battle.php">Insert Battle Information</a></li>
                <li><a href="displayBattles.php">Display Battles</a></li>
            </ul>

            <img src="assets/images/superheroes2.png" />
            <h2>Display Battles</h2>
        </header>
        
        <main>

            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Main Superpower</th>
                    <th>Villain Fought</th>
                </tr>
                <?php

                    echo "<tr>";
                    while ($row = $result -> fetch_array())
                    {
                        echo "<td>".$row['firstname']."</td>";
                        echo "<td>".$row['lastname']."</td>";
                        echo "<td>".$row['mainSuperPower']."</td>";
                        echo "<td>".$row['villainFought']."</td>";
                    }
                    echo "</tr>";
                
                ?>
            </table>
        
        </main>
        
        <br><br>
        
        <footer>Superhero Management System</footer>
        
    </body>

</html>