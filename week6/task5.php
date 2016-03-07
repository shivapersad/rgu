<!DOCTYPE html>
<html>
<head> </head>

<body>
<p>
    <?php
        $provisionedGoods = array("specs","mugs","sausage rolls");
        $endings = array("st","nd","rd","th");

        for ($i=1;$i<=30;$i++)
        {
            if ($i == 1)
                echo "On the 1st of the month no products are available <br>";
            elseif ($i == 2)
                echo "On the 2nd of the month specs are available <br>";
            elseif ($i == 3)
                echo "On the 3rd of the months mugs are available <br>";
            elseif (($i % 2 == 0) && ($i % 3 == 0) && ($i % 4 == 0) )
                echo "On the " . $i . $endings[3] . " of the month specs, mugs and sausage rolls are available <br>";
            elseif (($i % 2 == 0) && ($i % 3 == 0))
                echo "On the " . $i . $endings[3] . " of the month specs and mugs are available <br>";
            elseif (($i % 2 == 0) && ($i % 4 == 0))
                echo "On the " . $i . $endings[3] . " of the month specs and sausage rolls are available <br>";
            elseif (($i % 2 == 0) && ($i % 11 == 0))
                echo "On the " . $i . $endings[1] . " of the month specs are available <br>";
            elseif (($i % 3 == 0) && ($i % 4 == 0))
                echo "On the " . $i . $endings[3] . " of the month mugs and sausage rolls are available <br>";
            elseif ($i % 2 == 0)
                echo "On the " . $i . $endings[3] . " of the month specs are available <br>";
            elseif ($i % 3 == 0)
                echo "On the " . $i . $endings[3] . " of the month mugs are available <br>";
        }

        echo "<br><br>";

    for ($i = 1; $i < 30; $i++)
    {
        $y = 0; //I'm using this as a marker to tell that at least one thing is being made
        echo "<p>On day " . $i . " the following products are available: ";

        if ($i % 2 != 0)
        {
            echo "Sausage Rolls ";
            $y = 1;
        }
        if ($i % 3 != 0)
        {
            echo "Mugs ";
            $y = 1;
        }
        if ($i % 4 != 0)
        {
            echo "Specs";
            $y = 1;
        }
        if ($y != 1) //if one thing isn't being made on this day then it displays that nothing is available that day.
        {
            echo "NONE";
        }
        echo "</p>";
    }
    ?>
</p>
</body>
</html>