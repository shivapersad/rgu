<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die ('Connect failed ['.$db->connect_error.']');
    }

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $power = $_POST['power'];

    $sql = "INSERT INTO superheroes VALUES (NULL , '$firstName' , '$lastName' , '$power')";

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
            <ul>
                <li><a href="superheroform.html">Add a Superhero</a></li>
                <li><a href="showsuperheroes.php">Display all Superheroes</a></li>
            </ul>
        </header>

        <main>
            <div>
                <p>
                    Superhero successfully added to the database!!!
                </p>
            </div>

        </main>

        <br><br>

        <footer></footer>

    </body>

</html>

<?php
    mysqli_close($db);
?>