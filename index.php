<?php
    $paimta = rand(1, 100);
    $dviem_grazinsi = rand(101, 200);
    $vienu_grazinsi = rand(201, 300);
    
    $h3_1 = "Jei paėmei $paimta jievru";
    $h3_2 = "Su dviem kabančiais grąžinsi $dviem_grazinsi";
    $h3_3 = "Su vienu kabančiu grąžinsi $vienu_grazinsi";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
        <h1>Skolos skaiciuokle</h1>
        <h3><?php print $h3_1; ?></h3>
        <h3><?php print $h3_2; ?></h3>
        <h3><?php print $h3_3; ?></h3>
    </body>
</html>