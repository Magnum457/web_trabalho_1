<?php
	# imports
	include_once($configs->CONTROLPATH."ObterDados.php");
	include_once($configs->MODELPATH."negocio/ProdutoNegocio.php");
	include_once($configs->MODELPATH."classes/Produto.php");

	class RecuperaProduto{
		# recupera a lista de produtos
		public static function listaProduto(){
			$Negocio = new ProdutoNegocio();
			$res = $Negocio->listar();
			return $res;
		}
		# obter o produto pesquisado
		public static function obterProduto($id_produto){
			$Negocio = new ProdutoNegocio($id_produto);
			$res = $Negocio->obter($id_produto);
			$produto = $res->fetch(PDO::FETCH_ASSOC);
			return $produto;
		}
	}
?>