<?php
	#imports
	include("../classes/Usuario.php");
	include("../classes/Funcionario.php");
	include("../conexao/CRUD.php");

	class UsuarioDAO {
		// atributos
			private $listaCliente = array();
			private $listaFuncionario = array();
			private $CRUD = new CRUD();

		// metodos do cliente
			# adiciona
			public function addCliente($login, $nome, $senha){
				return $this->CRUD->insertDB("cliente", array($login, $nome, $senha),"");
			}
			# altera
			public function alteraCliente($login, $nome, $senha){
				return $this->CRUD->alteraDB("cliente", array($login, $nome, $senha),"");
			}
			# exclui
			public function excluiCliente($login){
				return $this->CRUD->excluiDB("cliente", $login);
			}
			# busca
			public function buscaCliente($login){
				return $this->CRUD->selectDB(, "cliente", $login);
			}
			# lista
			public function listaCliente(){
				return $this->CRUD->selectDB(, "cliente","");
			}
		// metodos do funcionario
			# adiciona
			public function addFuncionario($login, $nome, $senha, $salario){
				return $this->CRUD->insertDB("funcionario", array($login, $nome, $senha, $salario),"");
			}
			# altera
			public function alteraFuncionario($login, $nome, $senha, $salario){
				return $this->CRUD->alteraDB("funcionario", array($login, $nome, $senha, $salario),"");
			}
			# exclui
			public function excluiFuncionario($login){
				return $this->CRUD->excluiDB("funcionario", $login);
			}
			# busca
			public function buscaFuncionario($login){
				return $this->CRUD->selectDB(, "funcionario", $login);
			}
			# lista
			public function listaFuncionario(){
				return $this->CRUD->selectDB(, "funcionario","");
			}
	}
?>