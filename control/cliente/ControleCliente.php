<?php
	# imports
	include("../ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/UsuarioNegocio.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir_inicio':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->inserirCliente($login_cliente, $nome_cliente, $senha_cliente)){
				echo "Deu certo";
				header("Location: ../../index.php");
			} else {
				echo "Não deu certo";
			}
			break;

		case 'inserir':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->inserirCliente($login_cliente, $nome_cliente, $senha_cliente)){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->alterarCliente($login_cliente, $nome_cliente, $senha_cliente)){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->excluirCliente($_GET["exclui_cliente"])){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
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