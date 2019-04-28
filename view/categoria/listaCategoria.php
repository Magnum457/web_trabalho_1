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
			<th>Ações</th>
		</thead>	

		<?php
			# estrutura do for
			for ($i=0; $i < count($lista); $i++) { 
		?>
			<tr>
				<td><?php echo $lista[$i]->getID() ;?></td>
				<td><?php echo $lista[$i]->getDescricao() ;?></td>
				<td>
					<a href=<?php echo "alteraCategoria.php?categoria_altera=".$lista[$i]->getID(); ?> >Editar</a>
					<a href=<?php echo $configs->BASEURL."control/categoria/ControleCategoria.php?operacao=excluir&exclui_categ=".$lista[$i]->getID(); ?>>Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
	<a href=<?="novoCategoria.php"?>>Inserir nova categoria</a>
</body>
</html>