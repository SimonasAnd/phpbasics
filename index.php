<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for($i = 1; $i<=$months; $i++){
    $month_expenses = rand(400, 900);
    $wallet = ($wallet + $month_income) - $month_expenses;
}

$h1 = 'Wallet Forecast';
$h2 = "Po $months m., prognozuojamas likutis: $wallet";


?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>