<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Соединение с БД</title>
	</head>

	<body>

		<?php
		$db = mysql_connect("localhost", "Alex", "12345");
		mysql_select_db("Firstbd", $db);

		$result = mysql_query("SELECT * FROM Firma", $db);
		$myrow = mysql_fetch_array($result);

		do
		{
			printf("Сотрудник N - %s<br>%s<br>%s<br>%s<br><br>",$myrow['id'],$myrow['name'],$myrow['lastname'],$myrow['dol']);
		}
		while ($myrow = mysql_fetch_array($result));

	
		?>	


</body>
</html>
