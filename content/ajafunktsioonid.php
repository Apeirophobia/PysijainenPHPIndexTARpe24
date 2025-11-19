<?php
echo "<div class='flex-container'>";
echo "<div>";
echo "<h1>Ajafunktsioonid</h1>";
echo "Tänane kuupäev: ".date("d.m.Y");


// timezone - juhul kui tänane kuupäev ei ole määratud,
// php kasutab aega mis on localhost'is

date_default_timezone_set("Europe/Tallinn");
echo "<br>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezones</a>";
echo "<br>";
echo "time() - aeg sekundites ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "<pre>
date('d.m.Y G:i:s', time());
d - päev 01-31
m - kuu 01-12
Y - aasta neljakohane arv
G - 24 tunniline formaat
i - minutid 0-59
s - sekundid 0-59
</pre>";
echo "</div>";

echo "<div>";
echo "<br>";
echo "<h2>Tehted kuupäevadega</h2>";

echo "<br>";
echo "+1min = time() + 60 | ". date('d.m.Y G:i:s', time() + 60);
echo "<br>";
echo "+1tund = time() + 60*60 | ". date('d.m.Y G:i:s', time() + 60*60);
echo "<br>";
echo "+päev = time() + 60*60*24 | ". date('d.m.Y G:i:s', time() + 60*60*24);
echo "</div>";
echo "<br>";

echo "<div>";
echo "<h2>Kuupäeva genereerimine </h2>";

echo "<br>";

echo "mktime(tunnid, minutid, sekundid, kuu päev, aasta)";
echo "<br>";
$synnipaev=mktime(7, 0, 0, 4, 30, 2008);
echo "Minu sünnipäev ".date("d.m.Y G:i:s", $synnipaev);
echo "<br>";
echo "massiivi abil kuvada tänase kuu nimetust";
$kuud=array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni',
'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d', time());
$aasta = date('Y', time());
$kuu = $kuud[date('m')];
echo "<br>";
echo "Kuupäev kuunimetusega: ".$paev.". ".$kuu.", ".$aasta;
echo "<br>";
// ise kirjuta oma sünnipäeva kuu nimega
$kuu = $kuud[4];
echo "Sünnipäev kuunimetusega: "."30. ".$kuu.", 2008";
echo "</div>";

echo "</div>";

?>