<?php
	# imports
	include("ClassConexao.php");

	class Cadastro extends ClassConexao{
		# atributos
			private $comandos;
			private $contador;
			private $resultado;

		# métodos
			# executa os comandos pedidos para cada query no banco
			private function statement($Query, $Parametros){
				$this->countParametros($Parametros);
				$con = $this->conectaDB();
				$this->comandos = $con->prepare($Query);
				# percorrendo todos os parametros passados pela consulta e preenchendo na query
				if ($this->contador > 0){
					for($i = 1; $i <= $this->contador; $i++){
						$result = $this->comandos->bindValue($i, $Parametros[$i - 1]);
					}
				}
				# executa a query
				$this->resultado = $this->comandos->execute();
				if(!$this->comandos){
					echo "\nPDO::errorInfo():\n";
   					print_r($con->errorInfo());
				}
			}

			# conta os parametros passados para uma consulta
			private function countParametros($Parametros){
				$this->contador = count($Parametros);
			}

			# inserir os dados no banco de dados
			public function insertDB($Tabela, $Atributos, $Valores, $Parametros){
				# INSERT INTO cliente (login, nome, senha) values (login, nome, senha)
				$this->statement("INSERT INTO web_trabalho_1.$Tabela ($Atributos) values ($Valores)", $Parametros);
				return $this->resultado;
			}

			# Recuperar os dados no banco de dados
			public function selectDB($Campos ,$Tabela , $Condicao ,$Parametros){
				$this->statement("SELECT {$Campos} FROM web_trabalho_1.{$Tabela} {$Condicao}", $Parametros);
				return $this->comandos;
			}

			# Alterar os dados no banco de dados
			public function alteraDB($Tabela, $Set, $Condicoes ,$Parametros){
				# UPDATE cliente SET (nome, senha)
				$this->statement("UPDATE web_trabalho_1.{$Tabela} SET {$Set} where {$Condicoes}", $Parametros);
				return $this->resultado;
			}

			# Excluir os dados no banco de dados
			public function excluiDB($Tabela, $Condicoes, $Parametros){
				$this->statement("DELETE FROM web_trabalho_1.{$Tabela} where {$Condicoes}", $Parametros);
				return $this->comandos;
			}
	}
?>