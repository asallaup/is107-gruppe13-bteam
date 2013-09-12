<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
<link rel="stylesheet" type="text/css" href="teststyle.css">
<title>PC Byggaren</title>
<meta charset="UTF-8">

<script>
function updateProfil(){
	document.getElementById("iframewindow").src="minprofil.php"
}

function updateProsjekt(){
	document.getElementById("iframewindow").src="prosjekt.php"
}

function updateKontakt(){
	document.getElementById("iframewindow").src="kontakt.php"
}
			


</script>


</head>
<body>
<div id="content">

<div class="header">	
	<h1><a id="header" href="index.php"><abbr title="Forside">PC Byggaren</abbr></a></h1>
</div>

<div class="menutop">
	<ul>
	<li class="top"><a class="menu" href="#" onclick="updateProfil()"><abbr title="Min Profil">Min Profil</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateProsjekt()"><abbr title="Prosjekter">Prosjekter</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateKontakt()"><abbr title="Kontakt">Kontakt</abbr></a></li>
	<li class="top"><a class="menu" href="bygg.php" target="_blank"><abbr title="Bygg">Bygg</abbr></a></li>
</ul>
</div>

<iframe id="iframewindow" scrolling="no" src="forside.php" width="800"; height="600";></iframe>

<!-- GAMLE INFO VINDU! IKKE I BRUK!
<div class="infowindow">
	
	<p><img src="meg2.jpg" alt="Stian" border="1" height="151" width="214" align="top">Her kommer det tekst. <br><br><br>

	
	<h4>Utdanning</h4>
	<li>liste</li>
	<li>liste</li><br><br>

	<h4>Jobb</h4>
	<li>liste</li>
	<li>liste</li>
	<li>liste</li>
</div>-->

<div class="sidebar">
	<ul>
	<li>asd</li>
	<li>asd</li>
	<li>asd</li>
	<li>asd</li>
	<li>asd</li>
	</ul>
</div>

</div>
</body>

</html>