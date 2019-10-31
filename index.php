<?php
    $num_1 = rand(1, 100);
    $num_2 = rand(101, 200);
    $num_3 = rand(201, 300);
    
    $h3_1 = "Jei paėmei $num_1 jievru";
    $h3_2 = "Su dviem kabančiais grąžinsi $num_3";
    $h3_3 = "Su vienu kabančiu grąžinsi $num_2";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <div class="body_1">
            <h1>Skolos skaiciuokle</h1>
            <h3><?php print $h3_1; ?></h3>
            <h3><?php print $h3_2; ?></h3>
            <h3><?php print $h3_3; ?></h3>
        </div>
    </body>
</html>