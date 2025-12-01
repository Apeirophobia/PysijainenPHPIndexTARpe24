<?php
require("config.php");
global $yhendus;

if (isset($_REQUEST["kustuta"]))
{
    $kask = $yhendus -> prepare("DELETE FROM loomad WHERE ID=?");
    $kask -> bind_param("i", $_REQUEST['kustuta']);
    $kask -> execute();
}


?>

<!DOCTYPE html>
<html lang="et">
<head>
    <title>Loomad SQL - andmebaasist</title>
    <link rel="stylesheet" href="loomadStyle.css">
</head>

<body>
    <h1>Loomade tabeli sisu</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>Loomanimi</td>
            <td>Kaal</td>
            <td>Värv</td>
            <td>Tööriistad</td>
        </tr>


        <?php
        global $yhendus;
        $kask = $yhendus->prepare("SELECT ID, nimi, kaal, varv FROM loomad ORDER BY kaal");
        $kask -> bind_result($Id, $nimi, $kaal, $varv);
        $kask -> execute();

        while ($kask -> fetch())
        {
            echo "<tr>";
            echo "<td>$Id</td>";
            echo "<td>$nimi</td>";
            echo "<td>$kaal</td>";
            echo "<td>$varv</td>";
            echo "<td> <a class='Kustuta' href='?kustuta=$Id'>Kustuta</td>";
            echo "</tr>";
        }
        ?>

    </table>
    <a href="loomaLisamine.php">Lisa loom</a>
</body>
</html>

