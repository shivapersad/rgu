<?php

    include_once("connection.php");

    $id = $_GET["id"];

    $sql = "SELECT * FROM members where id='$id'";

    if (!$result = mysqli_query($db,$sql))
    {
        echo "Error with SQL";
    }
    else
        {
            $arr = mysqli_fetch_assoc($result);
            $firstName = $arr['firstName'];
            $middleName = $arr['middleName'];
            $lastName = $arr['lastName'];
            $g = $arr['gender'];
            $dob = $arr['dateOfBirth'];
            $hand = $arr['handedness'];

            $fullName = $firstName . " " . $middleName . " " . $lastName;

            if ($g == 'M')
            {
                $gender = "Male";
            }
            else
                {
                    $gender = "Female";
                }

            $dateOfBirth = date_format($dob , 'd-M-Y');
            
            if ($hand == 'L')
            {
                $handedness = "Left";
            }
            else
                {
                    $handedness = "Right";
                }

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cristars Badminton Club</title>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>

<header>
    <!-- <h1>Cristars Badminton Club</h1> -->
    <img src="assets/images/logo.jpg" alt="Cristars Badminton Club"/>

    <div id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About the Club</a></li>
            <li><a href="login.php">Members Sign In</a></li>
            <li><a href="players.html">Our Players</a></li>
        </ul>
    </div>

</header>

<main>

    <section>
        <h2>Cristars Badminton Club</h2>

        <h3>Player's Information</h3>

        <img src="assets/images/male.png" alt="Player's Image" />

        Full Name: <?php echo $fullName; ?>
        Gender: <?php echo $gender; ?>
        Date of Birth: <?php echo $dateOfBirth; ?>
        Handedness: <?php echo $handedness; ?>

    </section>

</main>

<br><br>

<footer>&copy;2016 Cristars Badminton Club</footer>

</body>

</html>

<?php

    mysqli_close($db);

?>