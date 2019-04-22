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
			}

			# conta os parametros passados para uma consulta
			private function countParametros($Parametros){
				$this->contador = count($Parametros);
			}

			# inserir os dados no banco de dados
			public function insertDB($Tabela, $Valores, $Parametros){
				# INSERT INTO cliente values (login, nome, senha)
				$this->statement("INSERT INTO web_trabalho_1.$Tabela values ($Valores)", $Parametros);
				return $this->resultado;
			}

			# Recuperar os dados no banco de dados
			public function selectDB($Valores = "*",$Tabela, $Parametros){
				$this->statement("SELECT {$Valores} FROM web_trabalho_1.{Tabela}", $Parametros);
				return $this->comandos;
			}

			# Alterar os dados no banco de dados
			public function alteraDB($Tabela, $Valores ,$Parametros){
				$this->statement("UPDATE FROM web_trabalho_1.{$Tabela} SET {$Valores}", $Parametros);
				return $this->comandos;
			}

			# Excluir os dados no banco de dados
			public function excluiDB($Tabela, $Parametros){
				$this->statement("DELETE FROM web_trabalho_1.{Tabela}", $Parametros);
				return $this->comandos;
			}
	}
?>