<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die ('Connect failed: ' . $db->connect_errno);
    }

    $sql = "SELECT * from superheroes";

    $result = mysqli_query($db,$result);

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
                                    $fullname = $row['firstname'] . " " . $row['lastname'];
                                    echo "<option value=\"{$row['$id']}\">{$fullname}</option>";
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