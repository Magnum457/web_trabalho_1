<?php
	class Produto{
		// atributos
			private $id;
			private $descricao;
			private $id_categoria;

		// getters e setters
			// id
			public function getId(){
				return $this->id;
			}
			public function setId($id){
				$this->id = $id;
			}
			//descricao
			public function getDescricao(){
				return $this->descricao;
			}
			public function setDescricao($descricao){
				$this->descricao = $descricao;
			}
			// id_categoria
			public function getId_categoria(){
				return $this->id_categoria;
			}
			public function setId_categoria($id_categoria){
				$this->id_categoria = $id_categoria;
			}
	}
?>