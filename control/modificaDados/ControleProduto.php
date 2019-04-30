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
			$res = $Negocio->inserir($descricao_produto, $id_categoria, $preco);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			$Negocio = new ProdutoNegocio();
			$res = $Negocio->alterar($id_produto, $descricao_produto, $id_categoria, $preco);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Não deu certo";
			}
			break;

		# excluir os dados
		case 'excluir':
			$Negocio = new ProdutoNegocio();
			$res = $Negocio->excluir($_GET["exclui_produto"]);
			if (is_string($res)){
				echo $res;
			} elseif($res == true) {
				echo "Deu certo";
				header("Location: ?operacao=listar");
			} else {
				echo "Não deu certo";
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