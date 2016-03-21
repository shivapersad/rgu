<?php

    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $gender = $_POST["gender"];
    $power = $_POST["power"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 8 - Superhero Revealed</title>
</head>

    <body>

        <header>
            <h1>Breaking News! - Superhero Revealed</h1>
            <img src="assets/images/superhero.png">
        </header>

        <main>
            <div>
                You have been revealed!!! Here is your information:<br>

                <table>
                    <tr>
                        <td>First Name:</td>
                        <td><?php echo $firstName; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><?php echo $lastName; ?></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><?php echo ucfirst($gender); ?></td>
                    </tr>
                    <tr>
                        <td>Main Superhero Power:</td>
                        <td><?php echo $power; ?></td>
                    </tr>
                </table>
            </div>

        </main>

        <br><br>

        <footer>Superheroes Revealed!</footer>

    </body>

</html>