<?php
	# imports
	$configs = include("../../config.php");
	include($configs->MODELPATH."classes/Funcionario.php");
	# recuperação das variaveis de sessão
	session_start();
	if (isset($_SESSION["listaFuncionario"])) {
		$lista = $_SESSION["listaFuncionario"];
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
	<title>Lista de Funcionario</title>
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
			<th>Salario</th>
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
				<td><?php echo $lista[$i]->getSalario() ?></td>
				<td>
					<a href=<?php echo "alteraFuncionario.php?funcionario_altera=".$lista[$i]->getLogin(); ?>>Editar</a>
					<a href=<?php echo $configs->BASEURL."control/modificaDados/ControleFuncionario.php?operacao=excluir&exclui_func=".$lista[$i]->getLogin(); ?>>Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
	<a href=<?php echo "novoFuncionario.php"?>>Inserir novo funcionario</a>
</body>
</html>