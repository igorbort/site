<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Соединение с kava</title>
		<link href="style2.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<a href="http://drupal.org" id="IN">Переход на drupal.org</a>
		
		<?php
			echo "<font color=#4CB848>";
			$name[0] = "Кофе \"Торальдо\"";
			$name[1] = "Кофе \"Торальдо Блу\"";
			$name[2] = "Кофе \"Торальдо Вендинг\"";
			$koli4estvo = "1 кг";
			$price[0] = "300 грн";
			$price[1] = "350 грн";
			$price[2] = "400 грн";
			$kolvjashike = "6";
		echo "<p align='left'>";
			function mylink($mylink,$name)
			{
		echo "<a href='$mylink' id='IN2'>Кофе \"Торальдо\"</a>";
			} 
			mylink('http://bdkava/kavatoraldo.php','$name|0|');

		echo "<br> \"Торальдо\" - $koli4estvo, по цене - $price[0]";
			$cenajashik = $price[0] * $koli4estvo * $kolvjashike;
		echo "<br>Цена за 1ящ.(6шт.) -$cenajashik грн";
			$sto100 = $cenajashik * "100" - $cenajashik;
		echo "<br>Цена за 100ящ. -$sto100 грн";
			
		echo "<p align='left'>";
		function mylink2($mylink2,$name)
			{
		echo "<a href='$mylink2' id='IN3'>Кофе \"Торальдо Вендинг\"</a>";
			} 
			mylink2('http://caffetoraldo.it','$name|3|');
		echo "<br> \"Торальдо Блу\" - $koli4estvo, по цене - $price[1]";
			$cenajashik = $price[1] * $koli4estvo * $kolvjashike;
		echo "<br>Цена за 1ящ.(6шт.) -$cenajashik грн";
			$sto100 = $cenajashik * "100" - $cenajashik;
		echo "<br>Цена за 100ящ. -$sto100 грн";

		echo "<p align='left'>";
		function mylink3($mylink3,$name)
			{
		echo "<a href='$mylink3' id='IN3'>Кофе \"Торальдо Блу\"</a>";
			} 
			mylink3('http://caffetoraldo.it','$name|2|');
		echo "<br> \"Торальдо Блу\" - $koli4estvo, по цене - $price[2]";
			$cenajashik = $price[2] * $koli4estvo * $kolvjashike;
		echo "<br>Цена за 1ящ.(6шт.) -$cenajashik грн";
			$sto100 = $cenajashik * "100" - $cenajashik;
		echo "<br>Цена за 100ящ. -$sto100 грн";
		echo "<br>";
		echo "<br>";
		
	
		?>	


</body>
</html>
