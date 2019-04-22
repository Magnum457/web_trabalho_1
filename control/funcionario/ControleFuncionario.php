<?php
	# imports
	include("ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/UsuarioNegocio.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->inserirFuncionario($nome, $login, $senha, $salario)){
				echo "Deu certo";
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			# code...
			break;

		# excluir os dados
		case 'excluir':
			# code...
			break;

		# listar os dados
		case 'listar':
			# code...
			break;

		# buscar os dados
		case 'buscar':
			# code...
			break;

		default:
			# code...
			break;
	}
?>