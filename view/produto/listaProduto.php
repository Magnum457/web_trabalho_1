<?php
	# imports
	$configs = include("../../config.php");
	include($configs->MODELPATH."classes/Produto.php");
	# recuperação das variaveis de sessão
	session_start();
	if (isset($_SESSION["listaProduto"])) {
		$lista = $_SESSION["listaProduto"];
		// echo "mande um sinal";
	} else {
		$lista = "";
		// echo "porque?";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Produto</title>
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
	<!-- começo do header -->
		<?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
	<!-- fim do header -->
	<table>
		<thead>
			<th>Id</th>
			<th>Descricao</th>
			<th>Id_Categoria</th>
			<th>Preço</th>
			<th rowspan="2">Ações</th>
		</thead>	

		<?php
			# estrutura do for
			for ($i=0; $i < count($lista); $i++) { 
		?>
			<tr>
				<td><?php echo $lista[$i]->getID() ?></td>
				<td><?php echo $lista[$i]->getDescricao() ?></td>
				<td><?php echo $lista[$i]->getId_categoria() ?></td>
				<td><?php echo $lista[$i]->getPreco() ?></td>
				<td>
					<a href=<?="alteraProduto.php?produto_altera=".$lista[$i]->getID(); ?>>Editar</a>
					<a href=<?php echo $configs->BASEURL."control/modificaDados/ControleProduto.php?operacao=excluir&exclui_produto=".$lista[$i]->getID(); ?>>Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
	<a href=<?= "novoProduto.php"?>>Inserir novo produto</a>
</body>
</html>