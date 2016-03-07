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
            elseif (($i % 2 == 0) && ($i % 3 == 0))
                echo "On the " . $i . $endings[3] . " of the month specs and mugs are available <br>";
            elseif (($i % 2 == 0) && ($i % 4 == 0))
                echo "On the " . $i . $endings[3] . " of the month specs and sausage rolls are available <br>";
            elseif (($i % 2 == 0) && ($i % 3 == 0) && ($i % 4 == 0) )
                echo "On the " . $i . $endings[3] . " of the month specs, mugs and sausage rolls are available <br>";
            elseif (($i % 3 == 0) && ($i % 4 == 0))
                echo "On the " . $i . $endings[3] . " of the month mugs and sausage rolls are available <br>";
            elseif ($i % 2 == 0)
                echo "On the " . $i . $endings[3] . " of the month specs are available <br>";
            elseif ($i % 3 == 0)
                echo "On the " . $i . $endings[3] . " of the month mugs are available <br>";
        }
    ?>
</p>
</body>
</html>