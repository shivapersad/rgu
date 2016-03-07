<!DOCTYPE html>
<html>
<head> </head>

<body>
<p>
    <?php

        $names = array("Shiva","Esther","Michal","Chris","Ludwig","Obed","Fred","Stewart","Michael","David");
        sort($names);

        $winner = rand(0,count($names));
        $specs_winner = $names[$winner];
        unset($names[$winner]);

        $winner = rand(0,count($names));
        $mugs_winner = $names[$winner];
        unset($names[$winner]);

        $winner = rand(0,count($names));
        $sausage_rolls_winner = $names[$winner];

        echo strtoupper($specs_winner) . " has won all of the specs <br>";
        echo strtoupper($mugs_winner) . " has won all of the mugs <br>";
        echo strtoupper($sausage_rolls_winner) . " has won all of the sausage rolls <br>";

    ?>
</p>
</body>
</html>