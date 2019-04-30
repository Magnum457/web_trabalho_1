<?php
	# imports
	$configs = include_once("../../config.php");
	include($configs->MODELPATH."classes/Usuario.php");
	# recuperação das variaveis de sessão
	session_start();
	if (isset($_SESSION["listaCliente"])) {
		$lista = $_SESSION["listaCliente"];
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
	<title>Lista de Cliente</title>
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
	<!-- começo do header -->
		<?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
	<!-- fim do header -->
	<table>
		<thead>
			<th>Login</th>
			<th>Nome</th>
			<th>Senha</th>
			<th rowspan="2">Ações</th>
		</thead>	

		<?php
			# estrutura do for
			for ($i=0; $i < count($lista); $i++) { 
		?>
			<tr>
				<td><?php echo $lista[$i]->getLogin() ?></td>
				<td><?php echo $lista[$i]->getNome() ?></td>
				<td><?php echo $lista[$i]->getSenha() ?></td>
				<td>
					<a href=<?php echo "alteraCliente.php?cliente_altera=".$lista[$i]->getLogin(); ?>>Editar</a>
					<a href=<?php echo $configs->BASEURL."control/modificaDados/ControleCliente.php?operacao=excluir&exclui_cliente=".$lista[$i]->getLogin(); ?>>Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
	<a href=<?php echo "novoCliente.php";?>>Inserir novo cliente</a>
</body>
</html>