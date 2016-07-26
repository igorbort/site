<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Соединение с БД Insert</title>
	</head>

	<body>

		<?php

		if (isset($_POST['name']))
		{
		$name = $_POST['name'];
		}
		if (isset($_POST['lastname']))
		{
		$lastname = $_POST['lastname'];
		}
		if (isset($_POST['dol']))
		{
		$dol = $_POST['dol'];
		}


		$db = mysql_connect("localhost", "Alex", "12345");
		mysql_select_db("Firstbd", $db);

		$result = mysql_query ("INSERT INTO Firma (name,lastname,dol) VALUES ('$name','$lastname','$dol')");

		if ($result == 'true')
		{
		echo "Информация в базу занесена успешно";
		}
		else
		{
		echo "Информация в базу не добавлена";
		}

	
		?>	


</body>
</html>
