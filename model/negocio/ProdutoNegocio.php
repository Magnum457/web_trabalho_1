<?php
	# imports
	include("../classes/Produto.php");
	include("../DAOs/ProdutoDAO.php");

	class ProdutoNegocio{
		# inserir
		public function inserir($descricao, $id_categoria){
			$produtoDAO = new ProdutoDAO();
			return $produtoDAO->addProduto($descricao, $id_categoria);
		}
		# alterar
		public function alterar($id, $descricao){
			$produtoDAO = new ProdutoDAO();
			return $produtoDAO->alteraProduto($id, $descricao);
		}
		# excluir
		public function excluir($id){
			$produtoDAO = new ProdutoDAO();
			return $produtoDAO->excluiProduto($id);
		}
		# obter
		public function obter($descricao){
			$produtoDAO = new ProdutoDAO();
			return $produtoDAO->buscaProduto($ldescricao);
		}
		# listar
		public function listar(){
			$produtoDAO = new ProdutoDAO();
			return $produtoDAO->listaProduto();
		}
	}


?>