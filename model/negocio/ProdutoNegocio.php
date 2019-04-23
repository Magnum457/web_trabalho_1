<?php
	# imports
	include($configs->MODELPATH."DAOs/ProdutoDAO.php");

	class ProdutoNegocio{
		# inserir
		public function inserir($descricao, $preco, $id_categoria){
			$produtoDAO = new ProdutoDAO();
			return $produtoDAO->addProduto($descricao, $preco, $id_categoria);
		}
		# alterar
		public function alterar($id, $descricao, $preco){
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