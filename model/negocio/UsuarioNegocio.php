<?php
	# imports
	include("../classes/Usuario.php");
	include("../DAOs/UsuarioDAO.php");
	include("../classes/Funcionario.php");

	class UsuarioNegocio{
		// metodos para o cliente
			# inserir
			public function inserir($nome, $login, $senha){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->addCliente($nome, $login, $senha);
			}
			# alterar
			public function alterar($nome, $login, $senha){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->alteraCliente($nome, $login, $senha);
			}
			# excluir
			public function excluir($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->excluiCliente($login);
			}
			# obter
			public function obter($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->buscaCliente($login);
			}
			# listar
			public function listar(){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->listaCliente();
			}
		// metodos para o funcionario
			# inserir
			public function inserir($nome, $login, $senha, $salario){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->addFuncionario($nome, $login, $senha, $salario);
			}
			# alterar
			public function alterar($nome, $login, $senha, $salario){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->alteraFuncionario($nome, $login, $senha, $salario);
			}
			# excluir
			public function excluir($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->excluiFuncionario($login);
			}
			# obter
			public function obter($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->buscaFuncionario($login);
			}
			# listar
			public function listar(){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->listaFuncionario();
			}
	}
?>