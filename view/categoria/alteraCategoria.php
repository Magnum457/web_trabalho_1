<?php
	# imports
	$configs = include_once("../../config.php");
	include_once("../../control/RecuperaDados/RecuperaCategoria.php");

	# recuperação de variaveis
	if(isset($_POST["categoria_altera"])){
		$id = $_POST["categoria_altera"];
		// echo "vi a alegria chegar quando recebi um telegrama";
	}else if(isset($_GET["categoria_altera"])){
		$id = $_GET["categoria_altera"];
		// echo "me liga, manda um telegrama, uma carta de amor";
	}else{
		$id = "";
	}

	# recuperação da categoria
	$categoria = RecuperaCategoria::obterCategoria($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Categoria</title>
	<!-- arquivos de css -->
        <link rel="stylesheet" href="../../css/reset.css">
        <link rel="stylesheet" href="../../css/estilo_admin.css">
    <!-- fim do css -->
    <!-- arquivos de js -->
        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../../js/validate.js"></script>
        <script type="text/javascript" src="../../js/additional-methods.min.js"></script>
        <script type="text/javascript" src="../../js/localization/messages_pt_BR.js"></script>
    <!-- fim do js -->
</head>
<body>
	<!-- começo do header -->
		<?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
	<!-- fim do header -->
	 <h1>Nova categoria</h1>
        <form action="../../control/modificaDados/ControleCategoria.php" method="post">
            <div>Descricao:</div>
            <div><input type="text" name="descricao_categoria" value=<?=$categoria["descricao"]?> /></div>
            <div><input type="hidden" name="id_categoria" value=<?=$categoria["id"]?> /></div>
            <div><input type="hidden" name="operacao" value="alterar" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>