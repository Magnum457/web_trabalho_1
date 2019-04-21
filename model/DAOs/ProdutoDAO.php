<?php
	# imports
	include("../classes/Categoria.php");
	include("../conexao/CRUD.php");

	class CategoriaDAO{
		// atributos
			private $listaProduto = array();
			private $CRUD = new CRUD();

		// métodos
			# adiciona
			public function addProduto($descricao, $id_categoria){
				return $this->CRUD->insertDB("produto", array($descricao, $id_categoria),"");
			}
			# altera
			public function alteraProduto($id, $descricao, $id_categoria){
				return $this->CRUD->alteraDB("categoria", array($descricao, $id_categoria), $id);
			}
			# exclui
			public function excluiProduto($id){
				return $this->CRUD->excluiDB("produto", $id);
			}
			# busca
			public function buscaProduto($descricao){
				return $this->CRUD->selectDB(, "produto", $descricao);
			}
			# lista
			public function listaProduto(){
				return $this->CRUD->selectDB(, "produto","");
			}
	}
?>