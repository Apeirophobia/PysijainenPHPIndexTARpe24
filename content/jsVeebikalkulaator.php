<h1>Veebikalkulaator</h1>

<h2>Vali pilt mida sa tahad osta</h2>
<input type="radio" name="valik" id="v1" value="images/chai.png" onchange="kuvaPilt()">
<label for="v1">chai.png</label>
<br>
<input type="radio" name="valik" id="v2" value="images/konn.png" onchange="kuvaPilt()">
<label for="v2">konn.png</label>
<br>
<input type="radio" name="valik" id="v3" value="images/paike.png" onchange="kuvaPilt()">
<label for="v3">paike.png</label>
<br>
<input type="radio" name="valik" id="v4" value="images/teekann.png" onchange="kuvaPilt()">
<label for="v4">teekann.png</label>
<br>
<input type="radio" name="valik" id="v5" value="images/triangel.png" onchange="kuvaPilt()">
<label for="v5">triangel.png</label>
<br>

<h2>Mitu pilti soovid osta?</h2>

<label for="tk">Vali kogus</label>
<input type="number" id="tk" min="1" max="100" step="1" value="1">
<br>
<br>
<input type="button" id="vali" value="Arvuta hind" onclick="arvutaPildiHind()">
<br>
<br>

<img src="" alt="" id="valitudPilt">

<br>

<div id="vastus2"></div>