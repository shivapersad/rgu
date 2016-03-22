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

            <div>

                <ul>
                    <?php

                        while ($row = $result->fetch_array())
                        {
                            echo "<li>" . $row['firstName'] . " " . $row['lastName'] . " fought " . $row['villainFought'] . " with " . $row['mainSuperpower'] . " powers.</li>";
                        }

                    ?>
                </ul>

            </div>
        
        </main>
        
        <br><br>
        
        <footer>Superhero Management System</footer>
        
    </body>

</html>