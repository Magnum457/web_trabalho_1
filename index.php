<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include("model/conexao/ClassConexao.php");

		$ConP = new ClassConexao();

		var_dump($ConP->conectaDB());
	?>
</body>
</html>