<?php
class ConexaoMysql {

	#realizar a conexao com o banco de dados
	public function conectaDB(){
		try {
			$Con = new PDO("mysql:host=localhost;dbname=web_trabalho","root","");
			return $Con;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}
?>