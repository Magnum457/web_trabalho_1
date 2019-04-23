<?php
	# imports
	include("ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/CategoriaNegocio.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new CategoriaNegocio();
			if ($Negocio->inserir($descricao)){
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

