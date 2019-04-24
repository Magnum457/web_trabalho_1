<?php
	# imports
	include("ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/UsuarioNegocio.php");

	echo $operacao;

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->inserirFuncionario($login, $nome, $senha, $salario)){
				echo "Deu certo";
				header("Location: ".$configs->BASEURL);
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->alterarFuncionario($login, $nome, $senha, $salario)){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new UsuarioNegocio();
			if ($Negocio->excluirFuncionario($_GET["exclui_func"])){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
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