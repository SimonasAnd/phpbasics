<?php
    $sudas_1 = rand(1, 100);
    $sudas_2 = rand(101, 200);
    $sudas_3 = rand(201, 300);
    
    $h3_1 = "Jei paėmei $sudas_1 jievru";
    $h3_2 = "Su dviem kabančiais grąžinsi $sudas_3";
    $h3_3 = "Su vienu kabančiu grąžinsi $sudas_2";
    
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1>Skolos skaiciuokle</h1>
        <h3><?php print $h3_1; ?></h3>
        <h3><?php print $h3_2; ?></h3>
        <h3><?php print $h3_3; ?></h3>
    </body>
</html>