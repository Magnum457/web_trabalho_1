<?php
	# imports
	include("../classes/Categoria.php");
	include("../conexao/CRUD.php");

	class CategoriaDAO{
		// atributos
			private $listaCategoria = array();
			private $CRUD = new CRUD();

		// métodos
			# adiciona
			public function addCategoria($descricao){
				return $this->CRUD->insertDB("categoria", $descricao,"");
			}
			# altera
			public function alteraCategoria($id, $descricao){
				return $this->CRUD->alteraDB("categoria", array($id, $descricao),"");
			}
			# exclui
			public function excluiCategoria($id){
				return $this->CRUD->excluiDB("categoria", $id);
			}
			# busca
			public function buscaCategoria($descricao){
				return $this->CRUD->selectDB(, "categoria", $descricao);
			}
			# lista
			public function listaCategoria(){
				return $this->CRUD->selectDB(, "categoria","");
			}
	}
?>