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
				return $Crud->insertDB("cliente", "login, nome, senha", "?,?,?", 
												  array($login, $nome, $senha));
			}
			# altera
			public function alteraCliente($login, $nome, $senha){
				$Crud = new Cadastro();
				return $Crud->alteraDB("cliente", "nome = ?, senha = ?", "login = ?", array($nome, $senha, $login));
			}
			# exclui
			public function excluiCliente($login){
				$Crud = new Cadastro();
				return $Crud->excluiDB("cliente", "login = ?", array($login));
			}
			# busca
			public function buscaCliente($login){
				$Crud = new Cadastro();
				return $Crud->selectDB("*", "cliente", $login);
			}
			# lista
			public function listaCliente(){
				$Crud = new Cadastro();
				$BFetch = $Crud->selectDB("*", "cliente", "", array());
				if ($BFetch) {
					$listaCliente = $BFetch->fetchAll(PDO::FETCH_CLASS, "Usuario");
					return $listaCliente;
				} else {
					echo  "Se houve um problema entre a gente deixa lá que isso passa dá um beijo e me abraça que o resto eu sei de cor";
					return false;
				}
			}
		// metodos do funcionario
			# adiciona
			public function addFuncionario($login, $nome, $senha, $salario){
				$Crud = new Cadastro();
				return $Crud->insertDB("funcionario", "login, nome, senha, salario", "?,?,?,?",
								 					  array($login, $nome, $senha, $salario));
			}
			# altera
			public function alteraFuncionario($login, $nome, $senha, $salario){
				$Crud = new Cadastro();
				return $Crud->alteraDB("funcionario", "nome = ?, senha = ?, salario = ?","login = ?", 
													  array($nome, $senha, $salario, $login));
			}
			# exclui
			public function excluiFuncionario($login){
				$Crud = new Cadastro();
				return $Crud->excluiDB("funcionario", "login = ?", array($login));
			}
			# busca
			public function buscaFuncionario($login){
				$Crud = new Cadastro();
				return $Crud->selectDB("*", "funcionario", "WHERE login = ?", array($login));
			}
			# lista
			public function listaFuncionario(){
				$Crud = new Cadastro();
				$BFetch = $Crud->selectDB("*", "funcionario", "", array());
				if ($BFetch) {
					$listaFuncionario = $BFetch->fetchAll(PDO::FETCH_CLASS, "Funcionario");
					return $listaFuncionario;
				} else {
					echo "Se houve um problema entre a gente deixa lá que isso passa dá um beijo e me abraça que o resto eu sei de cor";
					return false;
				}
				
			}
	}
?>