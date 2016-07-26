<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Соединение с PDO</title>
	</head>

	<body>

		<?php
		try {
		$pdo = new PDO ("mysql:dbname=world;host=localhost", "root", "");
		}
		catch(PDOExeption $e){
			echo "Возникла ошибка соединения: ".$e->getMessage();
			exit; 
		}
		
		$sql = "SELECT Code, Name FROM country";
		$rs = $pdo->query($sql);
			
		
		//while($row = $rs->fetch(PDO::FETCH_ASSOC))
			//echo "{$row['Code']} - {$row['Name']}<br />";
		
		$rows = $rs->fetchAll(PDO::FETCH_OBJ);

		foreach($rows as $counrty){
			echo "{$counrty->Name}<br />";
		}
		?>	


</body>
</html>
