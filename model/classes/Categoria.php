<?php
	class Categoria {
		// atributos
			private $id;
			private $descricao;

		// getters e setters
			// id
			public function getId(){
				return $this->id;
			}
			public function setId($id){
				$this->id = $id;
			}
			// descricao
			public function getDescricao(){
				return $this->descricao;
			}
			public function setDescricao($descricao){
				$this->descricao = $descricao;
			}
	}
?>