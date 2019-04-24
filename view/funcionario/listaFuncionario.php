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
</head>
<body>
	<table>
		<tr>
			<td>Login</td>
			<td>Nome</td>
			<td>Senha</td>
			<td>Salario</td>
			<td>Ações</td>
		</tr>	

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
					<a href=<?php echo $configs->BASEURL."control/funcionario/ControleFuncionario.php?operacao=excluir&exclui_func=".$lista[$i]->getLogin(); ?>>Excluir</a>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
</body>
</html>