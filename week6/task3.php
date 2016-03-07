<!DOCTYPE html>
<html>
<head> </head>

<body>
<p>
    <?php
        $wantedgood = "specs";

        switch ($wantedgood) {
            case "specs":
                echo "You have to be 16 to buy specs.";
                break;
            case "mugs":
                echo "You have to be 18 to buy mugs.";
                break;
            case "sausage rolls":
                echo "You have to be 21 to buy sausage rolls";
                break;
            default:
                echo "Invalid good";
        }
    ?>
</p>
</body>
</html>