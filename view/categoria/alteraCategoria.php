<?php
	include("../../model/conexao/Cadastro.php");

	if(isset($_POST["categoria_altera"])){
		$id = $_POST["categoria_altera"];
		// echo "vi a alegria chegar quando recebi um telegrama";
	}else if(isset($_GET["categoria_altera"])){
		$id = $_GET["categoria_altera"];
		// echo "me liga, manda um telegrama, uma carta de amor";
	}else{
		$id = "";
	}

	$Crud = new Cadastro();
	$BFetch = $Crud->selectDB("*", "categoria", "where id = ?", array($id));
	$Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Categoria</title>
</head>
<body>
	 <h1>Nova categoria</h1>
        <form action="../../control/categoria/ControleCategoria.php" method="post">
            <div>Descricao:</div>
            <div><input type="text" name="descricao" value=<?php echo $Fetch["descricao"]; ?> /></div>
            <div><input type="hidden" name="id" value=<?php echo $Fetch["id"]; ?> /></div>
            <div><input type="hidden" name="operacao" value="alterar" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>