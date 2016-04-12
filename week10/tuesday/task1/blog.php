<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Self Referencing Forms - Blog</title>
    </head>
    <body>
            <?
            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
            ?>
            <form action="<? {$_SERVER['PHP_SELF'];} ?>" method="post">
                Title:<input type="text" name="title"><br>
                Content:<textarea name="content" cols="40" rows="5"></textarea><br>
                Category:
                <select name="category">
                    <option value="cat">cat</option>
                    <option value="dog">dog</option>
                    <option value="misc">misc</option>
                </select>
                <br>
                <input type="submit" value="Submit">
            </form>
            <?
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $title = $_POST["title"];
            $content = $_POST["content"];
            $category = $_POST["category"];
            ?>

            <article>
            <h1><? echo $title; ?></h1>
            <p><? echo $content; ?></p>
            <strong> <? echo $category; ?></strong>
            </article>
            <?
        }
            ?>
    </body>
</html>