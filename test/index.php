<!DOCTYPE html>
<html>
<head>
	<!-- class er .  id er # -->
	<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PC Byggaren - TEST</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<?php
	include_once "mysql_connect.php"
?> 


	<!-- Hovedindex for webapplikasjon. -->
	

	<!-- Funksjon for endring av source i iframe. -->
	<script>
		function updateProfil(){
			document.getElementById("iframewindow").src="minprofil.php"
		}

		function updateProsjekter(){
			document.getElementById("iframewindow").src="prosjekter.php"
		}

		function updateKontakt(){
			document.getElementById("iframewindow").src="kontakt.php"
		}

		function updateBygg(){
			document.getElementById("iframewindow").src="bygg.php"
		}
	</script>


<body>
<div id="content">


	<!-- Tittel. -->
	<div class="header">	
		<h1><a href="http://test.kongeprosjekter.net/"><abbr title="Forside">PC Byggaren - TEST</abbr></a></h1>
	</div>


	<!-- Topp-menyen. Klikk menyvalg = execute funksjon for endring av iframe-source ref linje 15-27. -->
	<div class="menutop">
		<ul>
			<li class="top"><a class="menu" href="#" onclick="updateProfil()"><abbr title="Min Profil">Min Profil</abbr></a></li>
			<li class="top"><a class="menu" href="#" onclick="updateProsjekter()"><abbr title="Prosjekter">Prosjekter</abbr></a></li>
			<li class="top"><a class="menu" href="#" onclick="updateKontakt()"><abbr title="Kontakt">Kontakt</abbr></a></li>
			<li class="top"><a class="menu" href="#" onclick="updateBygg()""><abbr title="Bygg">Bygg</abbr></a></li>
		</ul>
	</div>


	<!-- Hovedvinduet embedded via iframe. -->
	<iframe id="iframewindow" scrolling="no" src="forside.php" width="790"; height="600";></iframe>
	
	<!-- div mainwindow som kan brukes når vi fjerner iFrame.. Stylet og kommentert ut i css
	<div id="mainwindow">
		<p>hovedvindu</p>
	</div>
	-->

	
	<!-- Sidemeny, ingen funksjon ennÃ¥. -->
	<div class="sidebar">
		<form action="login.php" method="POST">
		<ul>
			<li><br>Brukernavn: <input type="text" name="username">
			<li>Passord: <input type="password" name="password">
			<li><input type="submit" value="Logg inn">
	
			<li><br>Når logget inn:</li>
			<li>Mine PC'er</li>
			<li>Mitt galleri</li>
			<li>Mine innlegg</li>
			<li>Instillinger</li><br>
			<li>Upload</li>
			<li>Forum</li><br><br>
			<li>Logg ut</li>
		</ul>
		</form>
	</div>


	<div id="clear"></div>
	
	<div id="footer">
		<p>Footer</p>
	</div>



</div>
</body>
</html>