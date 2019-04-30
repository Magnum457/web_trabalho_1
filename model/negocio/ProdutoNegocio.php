<?php
	# imports
	include($configs->MODELPATH."DAOs/ProdutoDAO.php");

	class ProdutoNegocio{
		# operações
			# inserir
			public function inserir($descricao, $preco, $id_categoria){
				$produtoDAO = new ProdutoDAO();
				if (!$this->validarDescricao($descricao)) {
					return "Talvez não seja nada, seja só o destino.";
				} elseif (!$this->validarPreco($preco)) {
					return "Talvez não seja nada, seja só o destino.";
				} elseif(!$this->validarId_categoria($id_categoria)) {
					return "Talvez não seja nada, seja só o destino.";
				} else {
					return $produtoDAO->addProduto($descricao, $preco, $id_categoria);
				}
			}
			# alterar
			public function alterar($id, $descricao, $id_categoria, $preco){
				$produtoDAO = new ProdutoDAO();
				if (!$this->validarId($id)) { # verificação do id
					return "Talvez não seja nada, seja só o destino.";
				} elseif(!$this->validarDescricao($descricao)) { # verificação da descrição
					return "Talvez não seja nada, seja só o destino.";
				} elseif (!$this->validarPreco($preco)) { # verificação do preço
					return "Talvez não seja nada, seja só o destino.";
				} elseif(!$this->validarId_categoria($id_categoria)) { # verificação do id categoria
					return "Talvez não seja nada, seja só o destino.";
				} else {
					return $produtoDAO->alteraProduto($id, $descricao, $id_categoria, $preco);
				}
			}
			# excluir
			public function excluir($id){
				$produtoDAO = new ProdutoDAO();
				if (!$this->validarId($id)) { # verificação do id
					return "Talvez não seja nada, seja só o destino.";
				} else {
					return $produtoDAO->excluiProduto($id);
				}
			}
			# obter
			public function obter($id){
				$produtoDAO = new ProdutoDAO();
				return $produtoDAO->buscaProduto($id);
			}
			# listar
			public function listar(){
				$produtoDAO = new ProdutoDAO();
				return $produtoDAO->listaProduto();
			}

		# validações
			# validação do id do produto
			private function validarId($id){
				if($id == ""){ # verifica se o id é vazio
					return false;
				} elseif(is_null($id)) { # verifica se o id é nulo
					return false;
				} elseif(!is_numeric($id)) {
					return false;
				} else {
					return true;
				}
			}# validação do id da categoria
			private function validarId_categoria($id_categoria){
				if($id_categoria == ""){ # verifica se o id é vazio
					return false;
				} elseif(is_null($id_categoria)) { # verifica se o id é nulo
					return false;
				} elseif(!is_numeric($id_categoria)) { # verifica se o id é ou não um número
					return false;
				} else {
					return true;
				}
			}
			# validação da descrição
			private function validarDescricao($descricao){
				if($descricao == ""){ # verifica se a descrição é vazia
					return false;
				} elseif (is_null($descricao)) { # verica se a descrição é nula
					return false;
				} else {
					return true;
				}
			}
			# validação do preço
			private function validarPreco($preco){
				if($preco == ""){ # verifica se o preço é vazio
					return false;
				} elseif(is_null($preco)) { # verifica se o preço é nulo
					return false;
				} elseif(!is_numeric($preco)) { # verifica se o preço é um número
					return false;
				} else {
					return true;
				}
			}
	}


?>