<?php

	class Funcionario{
		// atributos
			private $nome;
			private $senha;
			private $login;
			private $salario;

		// getters e setters
			// nome
			public function getNome(){
				return $this->nome;
			}
			public function setNome($nome) {
				$this->nome = $nome;
			}
			// senha
			public function getSenha(){
				return $this->senha;
			}
			public function setSenha($senha) {
				$this->nome = $senha;
			}
			// login
			public function getLogin(){
				return $this->login;
			}
			public function setLogin($login) {
				$this->login = $login;
			}
			// salario
			public function getSalario(){
				return $this->salario;
			}
			public function setSalario($salario){
				$this->salario = $salario;
			}
	}
?>