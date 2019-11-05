<?php
$x = rand(1, 10);
$p = '';

for ($i = 1; $i <= $x; $i++) {
    $p .= "Tai yra $i-tasis ciklas </br>";
}
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <p><?php print $p; ?></p>
    </body>
</html>