<?php
	# imports
	include($configs->MODELPATH."conexao/Cadastro.php");
	include($configs->MODELPATH."classes/Usuario.php");
	include($configs->MODELPATH."classes/Funcionario.php");
	
	class UsuarioDAO {
		// atributos
			private $listaCliente = array();
			private $listaFuncionario = array();

		// metodos do cliente
			# adiciona
			public function addCliente($login, $nome, $senha){
				$Crud = new Cadastro();
				return $Crud->insertDB("cliente", "?,?,?", array($login, $nome, $senha));
			}
			# altera
			public function alteraCliente($login, $nome, $senha){
				$Crud = new Cadastro();
				return $Crud->alteraDB("cliente", array($login, $nome, $senha),"");
			}
			# exclui
			public function excluiCliente($login){
				$Crud = new Cadastro();
				return $Crud->excluiDB("cliente", $login);
			}
			# busca
			public function buscaCliente($login){
				$Crud = new Cadastro();
				return $Crud->selectDB("", "cliente", $login);
			}
			# lista
			public function listaCliente(){
				$Crud = new Cadastro();
				return $Crud->selectDB("", "cliente","");
			}
		// metodos do funcionario
			# adiciona
			public function addFuncionario($login, $nome, $senha, $salario){
				$Crud = new Cadastro();
				return $Crud->insertDB("funcionario", "?,?,?,?", array($login, $nome, $senha, $salario));
			}
			# altera
			public function alteraFuncionario($login, $nome, $senha, $salario){
				$Crud = new Cadastro();
				return $Crud->alteraDB("funcionario", array($login, $nome, $senha, $salario),"");
			}
			# exclui
			public function excluiFuncionario($login){
				$Crud = new Cadastro();
				return $Crud->excluiDB("funcionario", $login);
			}
			# busca
			public function buscaFuncionario($login){
				$Crud = new Cadastro();
				return $Crud->selectDB("", "funcionario", $login);
			}
			# lista
			public function listaFuncionario(){
				$Crud = new Cadastro();
				return $Crud->selectDB("", "funcionario","");
			}
	}
?>