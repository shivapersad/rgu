<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die ('Connect failed: ' . $db->connect_errno);
    }

    $sql = "SELECT * from superheroes";

    $result = mysqli_query($db,$sql);

    /* while ($row = $result->fetch_array())
    {
        echo "<ul>";
        echo "<li>{$row['superheroID']}</li>";
        echo "<li>{$row['firstName']}</li>";
        echo "<li>{$row['lastName']}</li>";
        echo "<li>{$row['mainSuperpower']}</li>";
        echo "</ul>";
        echo "<br>";
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero Management System - Battles</title>
</head>

    <body>
    
        <header>
            <h1>Superhero Management System</h1>

            <h2>Battles</h2>
        </header>
        
        <main>
            <form action="insertBattle.php" method="post">
                <table>
                    <tr>
                        <td>Name of Superhero:</td>
                        <td>
                            <select name="superhero" required>
                                <?php

                                while ($row = $result->fetch_array())
                                {
                                    $fullname = $row['firstName'] . " " . $row['lastName'];
                                    echo "<option value=\"{$row['superheroID']}\">$fullname</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Villain Fought:</td>
                        <td><input type="text" name="villain" required /></td>
                    </tr>
                </table>
            </form>
        
        </main>
        
        <br><br>
        
        <footer>Superhero Management System</footer>
        
    </body>

</html>

<?php

    mysqli_close($db);

?>