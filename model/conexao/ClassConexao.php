<?php
	# imports
	// $configs = include("../config.php"); 

	class ClassConexao{
		# Realiza a conexão com o banco de dados
		public function conectaDB(){
			try {
				$Con = new PDO("pgsql:host="."localhost".";dbname="."web_trabalho",
											 "magno", "123");
				return $Con;
			} catch (PDOException $Erro) {
				return $Erro;
			}
		}

	}
?>