<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Удаление из БД</title>
	</head>

	<body>

		<?php

		$db = mysql_connect("localhost", "Alex", "12345");
		mysql_select_db("Firstbd",$db);

		$result = mysql_query("DELETE FROM Firma WHERE id='5'");

		if ($result == 'true')
		{
		echo "Информация из базы удалена";
		}
		else
		{
		echo "Информация из базы не удалена";
		}
		

	
		?>	


</body>
</html>
