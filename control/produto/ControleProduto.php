<?php
	# imports
	include("../ObterDados.php");
	$configs = include_once("../../config.php"); 
	include_once($configs->MODELPATH."negocio/ProdutoNegocio.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new ProdutoNegocio();
			if ($Negocio->inserir($descricao_produto, $id_categoria, $preco)){
				header("Location: ?operacao=listar");
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
		echo $id."\t";
		echo $descricao."\t";
		echo $id_categoria."\t";
		echo $preco."\t";

			$Negocio = new ProdutoNegocio();
			if ($Negocio->alterar($id_produto, $descricao_produto, $id_categoria, $preco)){
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
			break;
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new ProdutoNegocio();
			if ($Negocio->excluir($_GET["exclui_produto"])){
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Porque não deu certo e a gente não tá junto?";
			}
			break;

		# listar os dados
		case 'listar':
			$Negocio = new ProdutoNegocio();
			$lista = $Negocio->listar();
			if($lista){
				session_start();
				$_SESSION["listaProduto"] = $lista;
				header("Location: ". $configs->BASEURL. "view/produto/listaProduto.php");
			} else {
				echo "Não deu certo";
			}
			break;

		# buscar os dados
		case 'buscar':
			# code...
			break;

		default:
			header("Location: ".$configs->BASEURL);
			break;
	}
?>