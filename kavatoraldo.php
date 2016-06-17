<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Соединение с bdkava</title>
		<link href="style3.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<a href="http://bdkava/kava.php" id="IN">НАЗАД</a>
		
		<?php

		$db = mysql_connect("localhost", "igor", "123456");
		mysql_select_db("kava", $db);

		$result = mysql_query("SELECT * FROM kava WHERE id='1'", $db);
		$myrow = mysql_fetch_array($result);

		do
		{

			printf("Товар N - %s<br>%s<br>%s<br>%s<br><br>",$myrow['id'],$myrow['name'],$myrow['Kolichesvto'],$myrow['Cena']);
		}
		while ($myrow = mysql_fetch_array($result));

			
	
		?>	


</body>
</html>
