
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ervin PHP tööde leht</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/joonis.css">
    <link rel="stylesheet" href="style/kalkulaator.css">

    <script src="js/joonistamineScript.js"></script>
    <script src="js/lipp.js"></script>
    <script src="js/randompiltScript.js"></script>
</head>
<body>
<?php
//päis
include("header.php");
?>

<?php
// navigeerimismenüü
include("nav.php");

?>

<div class="flex-container">
    <div>
        PHP - Serveripoolne skriptikeel, mis teeb oma tööd pärast seda,
        <br>
        kui toimus mingi sündmus. Seda saab kasutada nii HTML'i sees,
        <br>
        kui ka eraldiseisvana skriptina
    </div>

    <div>
        <?php
        // sisu - laetakse content kaustast
        if (isset($_GET["leht"])) {
            include("content/" . $_GET["leht"]);
        }
        ?>
    </div>

    <div>
        <img width="300" height="200" src="images/phpPilt.png" alt="PHP pilt">
    </div>

</div>


<?php
//jalus
include("footer.php");
?>
</body>
</html>
