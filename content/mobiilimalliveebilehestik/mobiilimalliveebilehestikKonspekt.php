<?php
    echo "<pre> ".
    'Avasin .pdf konspekti,
     Tegin faili sisselugemine.php
     Ning kopeerisin sinna html koodi:
     Seejärel tegin uue faili teade.txt ja kopeerisin sinna selle sisu.'
    ."</pre>";

    echo "<pre> 
    <!doctype html>
    <html>
    <head>
        <title>Tunniplaani leht</title>
    </head>
    <body>
        <h1>Esmaspäev</h1>
        <ol>
            <li>Matemaatika</li>
            <li>Ajalugu</li>
            <li>Laulmine</li>
        </ol>
        <?php
        require(teade.txt);
            ?>
    </body>
    </html>
    </code
    </pre>";
?>


