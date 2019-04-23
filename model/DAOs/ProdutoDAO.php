<?php
	# imports
	include($configs->MODELPATH."conexao/Cadastro.php");
	include($configs->MODELPATH."classes/Produto.php");

	class ProdutoDAO{
		// atributos
			private $listaProduto = array();

		// métodos
			# adiciona
			public function addProduto($descricao, $id_categoria, $preco){
				$CRUD = new Cadastro();
				return $CRUD->insertDB("produto", "descricao, preco, id_categoria", "?,?,?",
														array($descricao, $preco, $id_categoria));
			}
			# altera
			public function alteraProduto($id, $descricao, $id_categoria){
				$CRUD = new Cadastro();
				return $CRUD->alteraDB("categoria", array($descricao, $id_categoria), $id);
			}
			# exclui
			public function excluiProduto($id){
				$CRUD = new Cadastro();
				return $CRUD->excluiDB("produto", $id);
			}
			# busca
			public function buscaProduto($descricao){
				$CRUD = new Cadastro();
				return $CRUD->selectDB("", "produto", $descricao);
			}
			# lista
			public function listaProduto(){
				$Crud = new Cadastro();
				$BFetch = $Crud->selectDB("*", "produto", "", array());
				if ($BFetch) {
					$listaProduto = $BFetch->fetchAll(PDO::FETCH_CLASS, "Produto");
					return $listaProduto;
				} else {
					echo "Sei que fiz tudo errado mas foi tudo sem querer";
					return false;
				}
			}
	}
?>