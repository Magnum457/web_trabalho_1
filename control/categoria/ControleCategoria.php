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
			$res = $Negocio->inserir($descricao_categoria);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Deu ruim";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			$Negocio = new CategoriaNegocio();
			$res = $Negocio->alterar($id_categoria, $descricao_categoria);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Deu ruim";
			}
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new CategoriaNegocio();
			$res = $Negocio->excluir($_GET["exclui_categ"]);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Deu ruim";
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

