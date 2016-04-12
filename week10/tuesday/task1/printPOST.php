<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Using Forms to Send Information</title>
    </head>

    <body>

        <article>
            <h1><? echo $_POST["title"]; ?></h1>
            <p><? echo $_POST["content"]; ?></p>
            <strong> <? echo $_POST["category"]; ?></strong>
        </article>

    </body>
</html>

