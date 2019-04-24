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
</head>
<body>
	<table>
		<tr>
			<td>Id</td>
			<td>Descricao</td>
			<td>Id_Categoria</td>
			<td>Ações</td>
		</tr>	

		<?php
			# estrutura do for
			for ($i=0; $i < count($lista); $i++) { 
		?>
			<tr>
				<td><?php echo $lista[$i]->getID() ?></td>
				<td><?php echo $lista[$i]->getDescricao() ?></td>
				<td><?php echo $lista[$i]->getId_categoria() ?></td>
				<td>
					<a href=<?php echo "alteraProduto.php?produto_altera=".$lista[$i]->getID(); ?>>Editar</a>
					<a href=<?php echo $configs->BASEURL."control/produto/ControleProduto.php?operacao=excluir&exclui_produto=".$lista[$i]->getID(); ?>>Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
</body>
</html>