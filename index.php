<?php
    $bin_vol = 40;
    $bin_heap_vol = rand(1, 15);
    $trash_per_day = 15;
    
    $days = floor(($bin_vol + $bin_heap_vol) / $trash_per_day);
    
    $h1 = 'Šiukšlių prognozė';
    $p_1 = "Turima šiukšlinė - $bin_vol litrų";
    $p_2 = "Žmona nieko nesako, kol neviršija $bin_heap_vol litrų";
    $h3 = "Išvada: nieko nedarysiu $days dienas";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <p><?php print $p_1; ?></p>
        <p><?php print $p_2; ?></p>
        <h3><?php print $h3; ?></h3>
    </body>
</html>