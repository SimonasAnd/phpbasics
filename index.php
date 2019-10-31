<?php
    $string = 'tekstas';
    $int = 111;
    $bool = True;
    $null = null;
    
    $li_1 = $string;
    $li_2 = $int;
    $li_3 = $bool;
    $li_4 = $null;
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <ul>
            <li>String tipas: <?php print $li_1 ?></li>
            <li>Integer tipas: <?php print $li_2 ?></li>
            <li>Boolean tipas: <?php print $li_3 ?></li>
            <li>Null tipas: <?php print $li_4 ?></li>
        </ul>
    </body>
</html>