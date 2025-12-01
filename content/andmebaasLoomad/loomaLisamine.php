<?php
require('config.php');
// lisamine
global $yhendus;
if (isset($_REQUEST["loomanimi"]) && $_REQUEST["loomanimi"] != 0)
{

    if ($_REQUEST["kaal"] == 0 || $_REQUEST["varv"] == "")
    {
        header("Location:loomaLisamine.php");
        return;
    }

    $kask = $yhendus -> prepare("INSERT INTO loomad(nimi, kaal, varv) values(?, ?, ?)");
    $kask -> bind_param("sis", $_REQUEST["loomanimi"], $_REQUEST["kaal"], $_REQUEST["varv"]);
    $kask -> execute();

    //i - integer, s - string
    header("Location:loomadeKuvamine.php");
}


?>

<!DOCTYPE html>
<html lang='et'>

<head>
    <title>Looma lisamine SQL tabeli sisse</title>
    <link rel="stylesheet" href="loomadStyle.css">
</head>
<body>
    <h1>Looma lisamine</h1>

    <form action="" name="loom">
        <table>
            <tr>
                <td>
                    <label for="loomanimi"> Sisesta looma nimi: </label>
                    <input type="text" name="loomanimi" id="loomanimi"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="kaal">Sisesta looma kaalu: </label>
                    <input type="number" name="kaal" id="kaal">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="kaal">Sisesta looma värvi: </label>
                    <input type="text" name="varv" id="varv">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Lisa"/>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>
