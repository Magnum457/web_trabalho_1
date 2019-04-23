<?php
	# imports
	include($configs->MODELPATH."DAOs/CategoriaDAO.php");

	class CategoriaNegocio{
		# inserir
		public function inserir($descricao){
			$categoriaDAO = new CategoriaDAO();
			return $categoriaDAO->addCategoria($descricao);
		}
		# alterar
		public function alterar($id, $descricao){
			$categoriaDAO = new CategoriaDAO();
			return $categoriaDAO->alteraCategoria($id, $descricao);
		}
		# excluir
		public function excluir($id){
			$categoriaDAO = new CategoriaDAO();
			return $categoriaDAO->excluiCategoria($id);
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
	}
?>