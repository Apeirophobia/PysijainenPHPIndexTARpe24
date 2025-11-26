<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1=100;
$arv2=15;
$liitmine = $arv1 + $arv2;
$lahutamine = $arv1 - $arv2;
$korrutis = $arv1*$arv2;
$jagamine = $arv1/$arv2;

echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "<strong>Vastused: </strong>";
echo "<br>";
echo "Liitmine: ".$liitmine."<br>";
echo "Lahutamine: ".$lahutamine."<br>";
echo "Korrutamine: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "<h3>Omistamise operaatorid</h3>";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1 = $arv1 + 1
$arv1++;
echo $arv1. "- suurendamine ühe võrra (arv1++;)";
echo "<br>";
// $arv1-- - vähendamine ühe võrra $arv1 = $arv1 - 1
$arv1--;
echo $arv1. "- vähendamine ühe võrra (arv1--;)";
echo "<br>";
echo "<strong>Ruutjuur -sqrt(): </strong>".sqrt($arv1);
echo "<br>";
echo "<h3>Keskmise arvutamine</h3>";

echo "<br>";
echo "<strong>Massiivi [1, 2, 3, 4, 5] keskmine: </strong>";
function keskmine($massiiv)
{
    $summa = 0;
    foreach ($massiiv as $number)
    {
        $summa += $number;
    }

    return $summa / count($massiiv);
}

echo keskmine([1, 2, 3, 4, 5]);

echo "<br>";
echo "<h3> Juhusliku arvu tagastamine</h3>";
echo "<br>";

echo "<strong> Juhuslik arv rand(): </strong>";
echo rand();
echo "<br>";
echo "<strong>Vahemikus 1-10 rand(1, 10): </strong>";
echo rand(1, 10);
echo "<br>";
echo "<h3>Protsendi arvutamine</h3>";
echo "<br>";
echo "<strong>47.5% arvust 100: </strong>";
function protsendid($arv, $protsent)
{
    return ($arv / 100) * $protsent;
}

echo protsendid(100, 47.5);
