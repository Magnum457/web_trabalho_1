<?php
	# imports
	include($configs->MODELPATH."DAOs/UsuarioDAO.php");

	class UsuarioNegocio{
		// metodos para o cliente
			# inserir
			public function inserirCliente($login, $nome, $senha){
				$UsuarioDAO = new UsuarioDAO();
				if (!$this->validarLogin($login)) {
					return "login Inválido";
				} elseif(!$this->loginRepetido($login)){
					return "login repetido";
				} elseif(!$this->validarNome($nome)) {
					return "nome inválido";
				} elseif (!$this->validarSenha($senha)) {
					return "senha inválida";
				} else {
					return $UsuarioDAO->addCliente($login, $nome, $senha);	
				}
			}
			# alterar
			public function alterarCliente($login, $nome, $senha){
				$UsuarioDAO = new UsuarioDAO();
				if (!$this->validarLogin($login)) {
					return "login Inválido";
				} elseif(!$this->validarNome($nome)) {
					return "nome inválido";
				} elseif (!$this->validarSenha($senha)) {
					return "senha inválida";
				} else {
					return $UsuarioDAO->alteraCliente($login, $nome, $senha);	
				}
			}
			# excluir
			public function excluirCliente($login){
				$UsuarioDAO = new UsuarioDAO();
				if (!$this->validarLogin($login)) {
					return "login Inválido";
				} else {
					return $UsuarioDAO->excluiCliente($login);	
				}
			}
			# obter
			public function obterCliente($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->buscaCliente($login);
			}
			# listar
			public function listarCliente(){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->listaCliente();
			}
		// metodos para o funcionario
			# inserir
			public function inserirFuncionario($login, $nome, $senha, $salario){
				$UsuarioDAO = new UsuarioDAO();
				if (!$this->validarLogin($login)) {
					return "login Inválido";
				} elseif(!$this->loginRepetido($login)){
					return "login repetido";
				} elseif(!$this->validarNome($nome)) {
					return "nome inválido";
				} elseif (!$this->validarSenha($senha)) {
					return "senha inválida";
				} elseif (!$this->validarSalario($salario)) {
					return "salário inválido";
				} else {
					return $UsuarioDAO->addFuncionario($login, $nome, $senha, $salario);
				}				
			}
			# alterar
			public function alterarFuncionario($login, $nome, $senha, $salario){
				$UsuarioDAO = new UsuarioDAO();
				if (!$this->validarLogin($login)) {
					return "login Inválido";
				} elseif(!$this->validarNome($nome)) {
					return "nome inválido";
				} elseif (!$this->validarSenha($senha)) {
					return "senha inválida";
				} elseif (!$this->validarSalario($salario)) {
					return "salário inválido";
				} else {
					return $UsuarioDAO->alteraFuncionario($login, $nome, $senha, $salario);
				}
			}
			# excluir
			public function excluirFuncionario($login){
				$UsuarioDAO = new UsuarioDAO();
				if (!$this->validarLogin($login)) {
					return "login inválido";
				} else {
					return $UsuarioDAO->excluiFuncionario($login);
				}
			}
			# obter
			public function obterFuncionario($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->buscaFuncionario($login);
			}
			# listar
			public function listarFuncionario(){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->listaFuncionario();
			}
		// validações
			# login
			private function validarLogin($login){
				if ($login == "") { # login em branco
					return false;
				} elseif(is_null($login)) { # login nulo
					return false;
				} else {
					return true;
				}
			}
			# login repetido
			private function loginRepetido($login){
				$resCliente = $this->obterCliente($login);
				$FetchCliente = $resCliente->fetchAll();
				$resAdmin = $this->obterFuncionario($login);
				$FetchAdmin = $resAdmin->fetchAll();
				if(count($FetchCliente) > 0){ # login sendo usado por um cliente
					return false;
				} elseif(count($FetchAdmin)){ # login sendo utilizado por um funcionario
					return false;
				} else {
					return true;
				}
			}
			# nome
			private function validarNome($nome){
				if ($nome == "") { # nome em branco
					return false;
				} elseif(is_null($nome)) { # nome nulo
					return false;
				} else {
					return true;
				}
			}
			# senha
			private function validarSenha($senha){
				if ($senha == "") { # senha em branco
					return false;
				} elseif(is_null($senha)) { # senha nulo
					return false;
				} else {
					return true;
				}
			}
			# salario
			private function validarSalario($salario){
				if ($salario == "") { # salario em branco
					return false;
				} elseif(is_null($salario)) { # salario nulo
					return false;
				} elseif(!is_numeric($salario)) { # salario não é formado por números
					return false;
				} else {
					return true;
				}
			}
	}
?>