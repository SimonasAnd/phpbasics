<html>
    <head>
        <title>PHP</title>
        <style>
            .bomb{
                background-image: url("https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png");
                background-size: cover;
                background-repeat: no-repeat;
                display: block;
                width: calc(2.56px * <?php print date('s') ?>);
                height: calc(1.9px * <?php print date('s') ?>);
            }
            
            .boom00{
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/79/Operation_Upshot-Knothole_-_Badger_001.jpg");
                background-size: cover;
                display: block;
                width:500px;
                height:500px;
            }
            
        </style>
    </head>
    <body>
        <div class="size bomb boom<?php print date('s'); ?>">
        </div>
        <p><?php print date('s')?></p>
    </body>
</html>