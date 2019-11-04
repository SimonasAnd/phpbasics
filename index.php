<?php
$bool = true;
$int = 1;
$str_1 = '1';
$str_2 = '1.23';
$flt = 1.23;

if ($bool == $int) {
    $koks_1 = 'Lygūs';
} elseif ($bool === $int) {
    $koks_1 = 'Identiški';
}

if ($str_1 == $bool) {
    $koks_2 = 'Lygūs';
} elseif ($str_1 === $bool) {
    $koks_2 = 'Identiški';
}

if ($flt == $str_2) {
    $koks_3 = 'Lygūs';
} elseif ($flt == $str_2) {
    $koks_3 = 'Identiški';
}

$li_1 = "Bool (true) ir Integer (1): $koks_1";
$li_2 = "String (1) ir Boolean (1): $koks_2";
$li_3 = "Float (1.23) ir String (1.23): $koks_3";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <ul>
            <li><?php print $li_1 ?></li>
            <li><?php print $li_2 ?></li>
            <li><?php print $li_3 ?></li>
        </ul>
    </body>
</html>