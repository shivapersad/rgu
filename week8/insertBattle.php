<?php

    include_once('connection.php');

    if ($db -> connect_errno)
    {
        die('Connect failed: ' . $db->connect_errno);
    }

    $superheroID = $_POST['superhero'];
    $villain = $_POST['villain'];

    $sql = "INSERT INTO battles VALUES (NULL , {$superheroID} , {$villain})";

    if ($result = mysqli_query($db,$sql))
    {
        $message = "Battle successfully added to the database!!";
    }
    else
        {
            $message = "Error description: " . mysqli_error($db);
        }

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
            <h2>Insert Battle</h2>
        </header>
    
        <main>
            <p>
                <?php echo $message; ?>;
            </p>
        </main>
        
        <br><br>
        
        <footer>Superhero Management System</footer>
    
    </body>

</html>

<?php

    mysqli_close($db);

?>