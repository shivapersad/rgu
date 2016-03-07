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
        $names = array_values($names);

        $winner = rand(0,count($names));
        $mugs_winner = $names[$winner];
        unset($names[$winner]);
        $names = array_values($names);


        $winner = rand(0,count($names));
        $sausage_rolls_winner = $names[$winner];
        unset($names[$winner]);
        $names = array_values($names);

        echo strtoupper($specs_winner) . " has won all of the specs";
        echo strtoupper($mugs_winner) . " has won all of the mugs";
        echo strtoupper($sausage_rolls_winner) . " has won all of the sausage rolls";

    ?>
</p>
</body>
</html>