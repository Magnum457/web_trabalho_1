<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include("control/Classes/ConexaoPostgre.php");
		include("control/Classes/ConexaoMysql.php");

		$ConM = new ConexaoMysql();
		$ConP = new ConexaoPostgre();

		#var_dump($ConM->conectaDB());
		#print("\nHello World!\n");
		var_dump($ConP->conectaDB());
	?>
</body>
</html>