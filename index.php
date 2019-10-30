<html>
    <head>
        <title>PHP</title>
        <style>
            .bomb{
                background-image: url("https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png");
                background-size: cover;
                background-repeat: no-repeat;
            }
            
            .size{
                display:block;
                width: calc(2.56px * <?php print date('s') ?>);
                height: calc(1.9px * <?php print date('s') ?>);
            }
        </style>
    </head>
    <body>
        <div class="size bomb">
        </div>
        <?php print date('s') . 's' ?>
    </body>
</html>