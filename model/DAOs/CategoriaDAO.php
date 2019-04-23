<?php
	# imports
	include($configs->MODELPATH."conexao/Cadastro.php");
	include($configs->MODELPATH."classes/Categoria.php");

	class CategoriaDAO{
		// atributos
			private $listaCategoria = array();

		// métodos
			# adiciona
			public function addCategoria($descricao){
				$CRUD = new Cadastro();
				return $CRUD->insertDB("categoria", "descricao", "?", array($descricao));
			}
			# altera
			public function alteraCategoria($id, $descricao){
				$CRUD = new Cadastro();
				return $CRUD->alteraDB("categoria", array($id, $descricao),"");
			}
			# exclui
			public function excluiCategoria($id){
				$CRUD = new Cadastro();
				return $CRUD->excluiDB("categoria", $id);
			}
			# busca
			public function buscaCategoria($descricao){
				$CRUD = new Cadastro();
				return $CRUD->selectDB("", "categoria", $descricao);
			}
			# lista
			public function listaCategoria(){
				$Crud = new Cadastro();
				$BFetch = $Crud->selectDB("*", "categoria", "", array());
				if ($BFetch) {
					$listaCategoria = $BFetch->fetchAll(PDO::FETCH_CLASS, "Categoria");
					return $listaCategoria;
				} else {
					echo "Me diz aonde foi que eu errei, eu já sei tem outro alguém tentando atrapalhar nosso amor";
					return false;
				}
			}
	}
?>