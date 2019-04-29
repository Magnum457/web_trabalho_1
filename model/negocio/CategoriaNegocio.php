<?php
	# imports
	include($configs->MODELPATH."DAOs/CategoriaDAO.php");

	class CategoriaNegocio{
		# operações no banco de dados
			# inserir
			public function inserir($descricao){
				$categoriaDAO = new CategoriaDAO();
				if (!$this->validarDescricao($descricao)) {
					return "Hei hou, se quer o quê, com quem, jow?";
				} else {
					return $categoriaDAO->addCategoria($descricao);
				}
			}
			# alterar
			public function alterar($id, $descricao){
				$categoriaDAO = new CategoriaDAO();
				if (!$this->validarDescricao($descricao)) {
					return "Talvez não seja nada, seja só o destino.";
				} elseif(!$this->validarId($id)) {
					return "Hei hou, se quer o quê, com quem, jow?";
				} else {
					return $categoriaDAO->alteraCategoria($id, $descricao);
				}
			}
			# excluir
			public function excluir($id){
				$categoriaDAO = new CategoriaDAO();
				if ($this->validarId($id)) {
					return $categoriaDAO->excluiCategoria($id);
				} else {
					return "Hei hou, se quer o quê, com quem, jow?";
				}
			}
			# obter
			public function obter($descricao){
				$categoriaDAO = new CategoriaDAO();
				return $categoriaDAO->buscaCategoria($descricao);
			}
			# listar
			public function listar(){
				$categoriaDAO = new CategoriaDAO();
				return $categoriaDAO->listaCategoria();
			}

		# validações
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
			# validação do id
			private function validarId($id){
				if($id == ""){ # verifica se o id é vazio
					return false;
				} elseif(is_null($id)) { # verifica se o id é nulo
					return false;
				} elseif(!is_numeric($id)) { # verifica se o id não é número
					return false;
				} else {
					return true;
				}
			}
	}
?>