<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="joonis.php">
    <script src="../js/joonisScript.js"></script>
    <script src="lipp.js"></script>
</head>


<h1 id="Title">Joonistamine JS-ga</h1>
<canvas id="tahvel" width="300" height="250"></canvas>
<br>
<input type="button" value="Sirge joon" onclick="sirgeJoon()">
<br>
<input type="button" value="Kolmnurk" onclick="kolmnurk()">

<br>

<label for="raadius">Raadius:</label>

<input type="number" id="raadius" min="0" max="100" value="5" onchange="ring()">
<input type="button" value="Ring" onclick="ring()">

<br>

<input type="button" value="Ristkülik" onclick="ristkylik()">

<label for="laius">Laius:</label>
<input type="number" id="laius" min="0" max="100" value="5" onchange="ristkylik()">

<label for="korgus">kõrgus:</label>
<input type="number" id="korgus" min="0" max="100" value="5" onchange="ristkylik()">
<br>
<input type="button"  value="picsum pilt" onclick="pilt()">
<br>
<input type="button" id="mine" Name="valgusfoorile" value="Mine" onclick="valgusfoor()">
<input type="button" id="oota" Name="valgusfoorile" value="Oota" onclick="valgusfoor()">
<input type="button" id="seisa" Name="valgusfoorile" value="Seisa" onclick="valgusfoor()">


<br>
<input type="button" value="Puhasta" onclick="puhasta()">
<br>

<!--Lipud joonistamine-->
<h1 id="Title2">Lipud</h1>
<canvas id="lipp" width="330" height="210"></canvas>
<input type="button" value="Eesti lipp" onclick="eestiLipp()">
<input type="button" value="Prantsuse lipp" onclick="prantsusmaa()">
<input type="button" value="Hiina lipp" onclick="Hiina()">