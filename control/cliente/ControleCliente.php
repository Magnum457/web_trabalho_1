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
			if ($Negocio->inserirCliente($nome, $login, $senha)){
				echo "Deu certo";
				header("Location: ".$configs->BASEURL);
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
			$Negocio = new UsuarioNegocio();
			$lista = $Negocio->listarCliente();
			if($lista){
				session_start();
				$_SESSION["listaCliente"] = $lista;
				header("Location: ". $configs->BASEURL. "view/cliente/listaCliente.php");
			} else {
				echo "Não deu certo";
			}
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