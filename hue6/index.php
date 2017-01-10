<?php

	$myNav = ["Home", "About", "Portfolio", "Kontakt", "Login"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>

	<style>
		
		nav a {
			margin-left: 10px;
		}

		h1 {
			color: #d1a500;
			margin-bottom: 5px;
		}

		h3 {
			margin-top: 5px;
		}
		.data input {
			margin-bottom: 5px;
		}

		.wrapper {
			margin-left: 3%;
		}

	</style>
</head>
<body>
<div class="wrapper">
	
	<nav>
	<?php  
	for ($i=0; $i < sizeof($myNav); $i++) { ?>
		<a href="http://www.google.at"><?php echo "$myNav[$i]"; ?></a>
		<b> | </b>
	<?php } ?>

</nav>
	<h1>Kontakt</h1>
	
<?php 


if (isset($_POST['btnSubmit'])) {
	echo "<p>Vielen Danke</p>";

	echo "<p>Der Mondschein schien schon schön</p>";
}


else {
	echo"<h3>Wir freuen uns auf Ihre Anfrage!</h3>";
	echo"<p>Grund der Anfrage</p>";
	echo"<form action=\"#\" method=\"post\">";
	echo"<input type=\"radio\" name=\"reason\" value=\"FS\">Stellen<br>";
	echo"<input type=\"radio\" name=\"reason\" value=\"PR\">Reklamation<br>";
	echo"<input type=\"radio\" name=\"reason\" value=\"PN\">Neuheiten<br><br>";

	echo"Anrede* ";
	echo"<input type=\"radio\" name=\"gender\" value=\"Frau\" required>Frau";
	echo"<input type=\"radio\" name=\"gender\" value=\"Herr\" required>Herr<br>";

	echo"Vorname* ";
	echo"<input type=\"Text\" name=\"vn\" required><br>";
	echo" Nachname* ";
	echo"<input type=\"Text\" name=\"nn\" required> <br>";

	echo"<div class=\"data\">";
		echo"Straße ";
		echo"<input type=\"Text\" name=\"street\"><br>";
		echo"Postleitzahl ";
		echo"<input type=\"Text\" name=\"postalCode\"><br>";
		echo"Ort ";
		echo"<input type=\"Text\" name=\"place\"><br>";
		echo"Land ";
		echo"<input type=\"Text\" name=\"country\"><br><br>";
		echo"Telefonnummer ";
		echo"<input type=\"Text\" name=\"place\"><br>";
		echo"E-Mail ";
		echo"<input type=\"email\" name=\"country\"><br><br>";
		echo"Anfrage* <br>";
		echo"<textarea cols=\"30\" rows=\"5\" required></textarea>";
	echo"</div>";

	echo"<input type=\"submit\" name=\"btnSubmit\" value=\"Anfrage senden\">";
echo"</form>";
echo"</div>";
}
?>
</body>
</html>
