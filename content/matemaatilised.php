<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1=10;
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
echo "Omistamise operaatorid";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1 = $arv1 + 1
$arv1++;
echo $arv1. "- suurendamine ühe võrra (arv1++;)";
echo "<br>";
// $arv1-- - vähendamine ühe võrra $arv1 = $arv1 - 1
$arv1--;
echo $arv1. "- vähendamine ühe võrra (arv1--;)";