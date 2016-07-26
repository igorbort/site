<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Добавления нового сотрудника</title>
	</head>

	<body>

		<form action="mysql_insert.php" method="post" name="form">
		<p>Введите имя сотрудника: <br><input type="text" name="name" size="20" maxlength="40">
		</p>
		<p>Введдите фамилию: <br><input type="text" name="lastname" size="20" maxlength="40">
		</p>
		<p>Должность: <br><input type="text" name="dol" size="20" maxlength="40">
		</p>
		<p><input type="submit" name="submit" value="Занести нового сотрудника в базу">
		</p>

		</form>


</body>
</html>
