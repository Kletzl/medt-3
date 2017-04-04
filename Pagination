<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php

	$host = 'localhost';
	$dbname = 'classicmodels';
	$user = 'root';
	$pwd = '';
	
	$wieVielAufSeite = 20;
	
	try {
		if (isset($_GET['AnzahlSeiten']))
			$anzahl = $_GET['AnzahlSeiten'];
		
		else
			$anzahl = 0;
		
	$db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd );
	$sql = "SELECT productCode, productName, productLine From products limit $anzahl,$wieVielAufSeite";
	$maxsql = "SELECT (ceiling(count(*)/".$wieVielAufSeite.")-1)*".$wieVielAufSeite." maxPage FROM products";
	$max = $db->query($maxsql)->fetchAll(PDO::FETCH_ASSOC)[0]['maxPage'];
	
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}
	catch (PDOException $e) {

    die("<p>Datenbank nicht verfügbar</p>");
    $db = null;
	}
	
	echo "<h1>KUNDENÜBERSICHT</h1>";
	?>
	<a href="index.php?AnzahlSeiten=0"> &lt;&lt; </a>

	<a href="index.php?AnzahlSeiten=<?php echo $anzahl-$wieVielAufSeite < 0 ? 0 : $anzahl-$wieVielAufSeite; ?>"> &lt; </a>

	<a href="index.php?AnzahlSeiten=<?php echo $anzahl+$wieVielAufSeite > $max ? $max : $anzahl+$wieVielAufSeite; ?>"> &gt; </a>

	<a href="index.php?AnzahlSeiten=<?php echo $max; ?>"> &gt;&gt; </a>

	<?php
	echo "<table class=\"table tables-bordered\">";

	echo "<thead>";
		echo "<th>Code</th>";
		echo "<th>Name</th>";
		echo "<th>Line</th>";
	echo "</thead>";

	foreach ($db->query($sql) as $item)
	{
		echo "<tr>";

		?> <td class="col-xs-4 col-md-4"> <?php
		echo $item->productCode;
		echo "</td>";

		?> <td class="col-xs-4 col-md-4"> <?php
		echo $item->productName;
		echo "</td>";

		?> <td class="col-xs-4 col-md-4"> <?php
		echo $item->productLine;
		echo "</td>";
	}

	echo "</table>";
	?>
	
