<?php
	# imports
	$configs = include("../../config.php");
	include($configs->MODELPATH."classes/Categoria.php");
	# recuperação das variaveis de sessão
	session_start();
	if (isset($_SESSION["listaCategoria"])) {
		$lista = $_SESSION["listaCategoria"];
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
	<title>Lista de Categoria</title>
</head>
<body>
	<table>
		<tr>
			<td>Id</td>
			<td>Descricao</td>
			<td>Ações</td>
		</tr>	

		<?php
			# estrutura do for
			for ($i=0; $i < count($lista); $i++) { 
		?>
			<tr>
				<td><?php echo $lista[$i]->getID() ?></td>
				<td><?php echo $lista[$i]->getDescricao() ?></td>
				<td>
					<a href="#">Visualizar</a>
					<a href="#">Editar</a>
					<a href="#">Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
</body>
</html>