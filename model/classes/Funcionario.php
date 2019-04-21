<?php
	class Funcionario extends Usuario{
		// atributos
			private $salario;

		// getters e setters
			// salario
			public function getSalario(){
				return $this->salario;
			}
			public function setSalario($salario){
				$this->salario = $salario
			}
	}
?>