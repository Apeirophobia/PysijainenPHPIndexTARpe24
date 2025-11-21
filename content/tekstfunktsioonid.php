<?php
echo "<h2>Tekstfunktsioonid</h2>";
$tekst='Veebirakendus on arvutitarkvara programm';
echo $tekst;
echo "<br>";
echo "Mitu sõna on lauses - str_word_count(): ".str_word_count($tekst). " sõna";

//metshein.com -> PHP alused
echo "<br>";
echo "Kõik tähed väiketähtedeks - strtolower(): ". strtolower($tekst);
echo '<br>';
echo "Kõik tähed suurtähtedeks - strtoupper(): ". strtoupper($tekst);

echo '<br>';
echo "Muudab esimese sõna esitähe suureks - ucfirst(): "
    . ucfirst("island song");
echo "<br>";
echo "Sõne pikkus tähemärkides - strlen(): ". strlen($tekst);
echo '<br>';

echo "<pre>$tekst</pre>";
echo "<pre>trim() eemaldab kõike tühikuid teksti algusest ja teksti lõppust</pre>";
echo "<pre>".trim('    '.$tekst.'    ')."</pre>";
echo "<pre>ltrim() eemaldab kõike tühikuid teksti algusest</pre>";
echo "<pre>".ltrim('    '.$tekst.'    ')."</pre>";
echo "<pre>rtrim() eemaldab kõike tühikuid teksti lõppust</pre>";
echo "<pre>".rtrim('    '.$tekst.'    ')."</pre>";

$tekst2 = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo "<br>";
echo "strip_tags() eemaldab kõike HTML ja PHP koodi antud tekstist";
echo "<br>";
echo $tekst2;
echo "<br>";
echo strip_tags($tekst2); 	//Experience is the teacher of fools

echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "<br>";
echo "PHP Käsitleb teksti kui massiivina";
echo "<br>";
echo "index 0 ehk esitäht: ". $tekst[0]; 				//A
echo '<br>';
echo "index 4: ". $tekst[4]; 				//t
echo "<br>";
print_r(str_word_count($tekst, 1)); // lause on jaotatud sõnadeks massiivisse.
echo "<br>";
$teinesona = str_word_count($tekst, 1);
echo "Teine sõna tekstimassiivist: ";
print($teinesona[1]); // teinse sõna massiivis
echo "<br>";
echo "<h3>Teksti asendamine</h3>";

$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;

echo "substr_replace() võtab teksti, asendusteksti ja asendab teksti antud algusindeksist lõppindeksini";
echo "<br>";
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo "<br>";
$tekstLehmast = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = 'lehm';
$asenda = 'koer';
echo str_replace($otsi, $asenda, $tekstLehmast);

echo "<br>";
echo "<h3>Mõstatus - arva ära Eesti linnanimi</h3>";
echo "<br>";
$linn = "valga";
echo "<ol><li>Linn algab tähega:".strtoupper($linn[0]). "</li>";
echo "<br>";
echo "<li> Selle linna keskmine täht on ".substr($linn, 2, 1). "</li>";
echo "<br>";
echo "<li> Selle linna nimes on ".strlen($linn). " tähte"."</li>";
echo "<br>";
echo "<li> Selle linna nime esi- ja lõpptäht: ".substr_replace($linn, "***", 1, 3)."</li>";
echo "<br>";
echo "<li> Seda linna sagedasti nimetatakse pommiauguks,
seega ma panin selle linnanime keskele sõna pommiauk: ".
    substr_replace($linn, "pommiauk", 2).substr($linn, -3, 3).
    "</li>";

echo "</ol>";
?>

<form action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linna nimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>

<?php
if (isset($_REQUEST['linn'])){

    if (strtolower($_REQUEST['linn']) != "$linn"){
        echo $_REQUEST["linn"]." on vale";
        return;
    }

    echo $_REQUEST["linn"]." on õige";

}


?>
