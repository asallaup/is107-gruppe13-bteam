<html>
<head>
<link rel="stylesheet" type="text/css" href="teststyle.css">
<title>PC Byggaren</title>
<meta charset="UTF-8">
</head>
<body>
<div id="content">


<p>Hei, vi er the B-Team! Gruppa som står bak dette prosjektet består av følgende:<br>
Emil Volckmar Ry, Kenneth Finnesand, Sondre Sallaup, Stian Killerud og Martin Othamar.<br>
Vi er bachelorstudenter i IT og Informasjonssystemer ved UiA og har valgt å lage <br>PCByggaren som et prosjekt i første semester.
Send oss en mail via skjemaet under<br> dersom du har spørsmål eller ønsker å gi tilbakemelding.<br><br>
</p>

<?php
// Hvis form er fylt ut, execute kode for mail.
if (isset($_REQUEST['epost']))
	{
	$navn = $_REQUEST['navn'];
	$epost = $_REQUEST['epost'];
	$emne = $_REQUEST['emne'];
	$melding = $_REQUEST['melding'];
	mail("martino1993@hotmail.com", $emne,
	$melding, "Fra:" . $epost);
	echo "Takk for at du brukte tjenesten vår, $navn.";
  }
else
// Hvis ikke, echo form i html. Kilde: http://www.w3schools.com/php/php_mail.asp
	{
	echo "<form method='post' action='kontakt.php'>
	Ditt navn: <br><input name='navn' type='text'><br>
	Din epostadresse: <br><input name='epost' type='text'><br>
	Emne: <br><input name='emne' type='text'><br>
	Melding:<br>
	<textarea name='melding' rows='15' cols='40'>
	</textarea><br>
	<input type='submit'>
	</form>";
	}
?>

</div>
</body>
</html>