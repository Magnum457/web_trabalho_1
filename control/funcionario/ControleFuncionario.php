<?php
	# imports
	include("../ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/UsuarioNegocio.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new UsuarioNegocio();
			$res = $Negocio->inserirFuncionario($login_funcionario, $nome_funcionario, $senha_funcionario, $salario);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "mas você me conhece eu faço tudo errado.";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			$Negocio = new UsuarioNegocio();
			$res = $Negocio->alterarFuncionario($login_funcionario, $nome_funcionario, $senha_funcionario, $salario);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "mas você me conhece eu faço tudo errado.";
			}
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new UsuarioNegocio();
			$res = $Negocio->excluirFuncionario($_GET["exclui_func"]);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "mas você me conhece eu faço tudo errado.";
			}
			break;

		# listar os dados
		case 'listar':
			$Negocio = new UsuarioNegocio();
			$lista = $Negocio->listarFuncionario();
			if($lista){
				session_start();
				$_SESSION["listaFuncionario"] = $lista;
				header("Location: ". $configs->BASEURL. "view/funcionario/listaFuncionario.php");
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