<?php
	# imports
	include("../DAOs/CategoriaDAO.php");
	include("../classes/Categoria.php");

	class Categoria{
		# inserir
		public function inserir($descricao){
			$categoriaDAO = new CategoriaDAO();
			return $categoriaDAO->addCategoria($nome, $login, $senha);
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
			return $categoriaDAO->buscaCategoria($ldescricao);
		}
		# listar
		public function listar(){
			$categoriaDAO = new CategoriaDAO();
			return $categoriaDAO->listaCategoria();
		}
	}
?.