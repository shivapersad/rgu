<!DOCTYPE html>
<html>
<head> </head>

<body>
<p>
    <?php

        function wantedBanner($name,$items)
        {
            echo "Wanted: " . $name . "<br>";
            echo "Known to be in possession of the following items: <br>";
            echo "Specs (" . $items[0] . ") <br>";
            echo "Mugs (" . $items[1] . ") <br>";
            echo "Sausage rolls (" . $items[2] . ") <br>";
            echo "Award for capture: $" . awardForCapture($items);
        }

        function awardForCapture($items)
        {
            $award = (10 * (pow(($items[0] * $items[1] * $items[2]),2)/2));
            return $award;
        }

        $items = array(2,3,5);
        $name = "Shiva";

        wantedBanner($name,$items);
    ?>
</p>
</body>
</html>