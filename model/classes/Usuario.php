<?php
	class Usuario {
		// atributos
			private $nome;
			private $senha;
			private $login;

		// getters e setters
			// nome
			public function getNome(){
				return $this->nome;
			}
			public function setNome($nome) {
				$this->nome = $nome;
			}
			// senha
			// nome
			public function getSenha(){
				return $this->nome;
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
	}
?>