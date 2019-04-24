<?php
	# imports
	include($configs->MODELPATH."DAOs/UsuarioDAO.php");

	class UsuarioNegocio{
		// metodos para o cliente
			# inserir
			public function inserirCliente($login, $nome, $senha){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->addCliente($login, $nome, $senha);
			}
			# alterar
			public function alterarCliente($login, $nome, $senha){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->alteraCliente($login, $nome, $senha);
			}
			# excluir
			public function excluirCliente($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->excluiCliente($login);
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
				return $UsuarioDAO->addFuncionario($login, $nome, $senha, $salario);
			}
			# alterar
			public function alterarFuncionario($login, $nome, $senha, $salario){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->alteraFuncionario($login, $nome, $senha, $salario);
			}
			# excluir
			public function excluirFuncionario($login){
				$UsuarioDAO = new UsuarioDAO();
				return $UsuarioDAO->excluiFuncionario($login);
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
	}
?>