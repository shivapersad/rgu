<!DOCTYPE html>
<html>
<head> </head>

<body>
<p>
    <?php
        $myage = 21;
        $myname = "Shiva";

        if (($myage >= 16) && ($myage <18))
            echo $myname . " is able to buy specs";
        elseif (($myage >= 18) && ($myage < 21))
            echo $myname . " is able to buy specs and mugs";
        elseif ($myage >= 21)
            echo $myname . " is able to buy specs, mugs and sausage rolls";
        else
            echo $myname . " is UNABLE to buy specs, mugs and sausage rolls";
    ?>
</p>
</body>
</html>