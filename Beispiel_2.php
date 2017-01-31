<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>A Web Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<h1>Grid Generator</h1>

	<form action="#">

	
	<label><input type="checkbox" name="tage[]" value="Montag">Montag</label><br>
	<label><input type="checkbox" name="tage[]" value="Dienstag">Dienstag</label><br>
	<label><input type="checkbox" name="tage[]" value="Mittwoch">Mittwoch</label><br>
	<label><input type="checkbox" name="tage[]" value="Donnerstag">Donnerstag</label><br>
	<label><input type="checkbox" name="tage[]" value="Freitag">Freitag</label><br>
	<label><input type="checkbox" name="tage[]" value="Samstag">Samstag</label><br>
	<label><input type="checkbox" name="tage[]" value="Sonntag">Sonntag</label><br>
	<label><input type="checkbox" name="tage[]" value="TagDerErstEingeführtWird">TagDerErstEingeführtWird</label><br><br>
	<label>Anzahl der Spalten  <input type="text" name="numberFields"></label>

	<br><input type="submit" name="submitBtn" value="Erstellen"><br><br>

	</form>

	<?php

	if(!isset($_GET['submitBtn']))
	{
		exit;
	}

	$tage = $_GET['tage'];
	?>
	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Tag</th>
					<?php
					for ($a = 1; $a <= $_GET['numberFields']; $a++)
					{
						echo "<th>Event {$a}</th>";
					}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					for ($x = 0; $x < sizeof($tage); $x++){
						echo "<tr>";
							echo "<td>";
								echo "$tage[$x]";
							echo "</td>";
							for ($y=0; $y < $_GET['numberFields']; $y++) { 
								echo "<td>Event {$x}.{$y}</td>";
							}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>

</body>
</html>
