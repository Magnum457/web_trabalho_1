<?php
	# imports
	include("../ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/CategoriaNegocio.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new CategoriaNegocio();
			if ($Negocio->inserir($descricao_categoria)){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			$Negocio = new CategoriaNegocio();
			if ($Negocio->alterar($id_categoria, $descricao_categoria)){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new CategoriaNegocio();
			if ($Negocio->excluir($_GET["exclui_categ"])){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
			break;

		# listar os dados
		case 'listar':
			$Negocio = new CategoriaNegocio();
			$lista = $Negocio->listar();
			if($lista){
				session_start();
				$_SESSION["listaCategoria"] = $lista;
				header("Location: ". $configs->BASEURL. "view/categoria/listaCategoria.php");
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

