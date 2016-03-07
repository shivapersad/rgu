<!DOCTYPE html>
<html>
<head> </head>

<body>
<p>
    <?php
        $provisionedActivities = array("specs","drugs","rock and roll");

        echo "<h1>First Array Output</h1>";

        foreach ($provisionedActivities as $x)
        {
            print "<p>$x</p>";
        }

        $provisionedActivities[1] = "hugs";

        echo "<h1>Second Array Output - Modified drugs to hugs</h1>";

        foreach ($provisionedActivities as $x)
        {
            print "<p>$x</p>";
        }

        unset($provisionedActivities[2]);

        echo "<h1>Third Array Output - Removed rock and roll</h1>";

        foreach ($provisionedActivities as $x)
        {
            print "<p>$x</p>";
        }
    ?>
</p>
</body>
</html>