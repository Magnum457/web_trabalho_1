<?php $configs = include_once("../../config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Categoria</title>
	<link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
	<!-- começo do header -->
		<?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
	<!-- fim do header -->
        <form action="../../control/modificaDados/ControleCategoria.php" method="post" name="form-categ">
        	<fieldset class="cadastro">
        		<legend>Cadastro de categoria</legend>
        		<label for="descricao">Descricao:</label><br>
	            <input type="text" name="descricao_categoria" id="descricao" required /><br>
	            <input type="hidden" name="operacao" value="inserir" />
	            <input type="submit" value="Salvar" /></div>
        	</fieldset>
        </form>
</body>
</html>