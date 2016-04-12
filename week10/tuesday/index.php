<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Self Referencing Forms</title>
</head>
<body>
    <?
        if ($_SERVER['REQUEST_METHOD'] === 'GET')
        {
    ?>
    <form action="<? {$_SERVER['PHP_SELF'];} ?>" method="post">
        <label>Forename</label>
        <input type="text" name="forename">
        <br>
        <label>Surname</label>
        <input type="text" name="surname">
        <p><input type="submit" value="Submit"></p>
    </form>
    <?
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $forename = $_POST["forename"];
            $surname = $_POST["surname"];
            print("<h1>Hello {$forename} {$surname}</h1>");
        }

    ?>
</body>
</html>