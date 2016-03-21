<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 8 - Creating a Superhero</title>
</head>

    <body>

        <header>
            <h1>Creating a Superhero</h1>

            <img src="assets/images/superhero.png">
        </header>

        <main>

            <form action="revealSuperheroes.php" method="post">
                <table>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="fname" required></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="lname" required></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="male" required>Male</td>
                        <td><input type="radio" name="gender" value="female">Female</td>
                    </tr>
                    <tr>
                        <td>Main Superhero Power:</td>
                        <td><input type="text" name="power" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit your application"></td>
                        <td></td>
                    </tr>
                </table>
            </form>

        </main>

        <br><br>

        <footer>Superheroes ho!!!</footer>

    </body>

</html>