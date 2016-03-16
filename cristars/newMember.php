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

                <h3>New Member Form</h3>

                <form method="post" action="createNewMember.php">
                    <table>
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" placeholder="First Name" maxlength="100" name="firstName" required /></td>
                        </tr>
                        <tr>
                            <td>Middle Name:</td>
                            <td><input type="text" placeholder="Middle Name" maxlength="100" name="middleName" required /></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><input type="text" placeholder="Last Name" maxlength="100" name="lastName" required /></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><input type="radio" name="gender" value="M">Male</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" name="gender" value="F">Female</td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><input type="date" name="dateOfBirth" value="1980-01-01" max="1960-01-01"></td>
                        </tr>
                        <tr>
                            <td>Handedness:</td>
                            <td><input type="radio" name="handedness" value="L">Left</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" name="handedness" value="R">Right</td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </table>
                </form>
            </section>

        </main>

        <br><br>

        <footer>&copy;2016 Cristars Badminton Club</footer>

    </body>

</html>