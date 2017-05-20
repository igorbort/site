<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Обновление в БД</title>
	</head>

	<body>

		<?php

		$db = mysql_connect("localhost", "Alex", "12345");
		mysql_select_db("Firstbd",$db);

		$result = mysql_query("UPDATE Firma SET name='Егор', lastname='Егоров' WHERE id='1'");

		if ($result == 'true')
		{
		echo "Информация в базе обновлена успешно";
		}
		else
		{
		echo "Информация в базе не обновлена";
		}
		

	
		?>	


</body>
</html>
