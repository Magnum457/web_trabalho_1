<?php $configs = include_once("../../config.php");?>
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
	<div class="container">
		<form action="../../control/modificaDados/ControleCategoria.php" method="post" name="form-categ">
        	<fieldset class="cadastro">
        		<legend>Cadastro de categoria</legend>
        		<div class="form-group">
	        		<label for="descricao">Descricao:</label><br>
		            <input type="text" name="descricao_categoria" id="descricao" class="form-control" required />	
        		</div>
	            <input type="hidden" name="operacao" value="inserir" />
	            <input type="submit" value="Salvar" /></div>
        	</fieldset>
        </form>
	</div>
</body>
</html>