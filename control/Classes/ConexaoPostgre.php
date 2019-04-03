<?php
class ConexaoPostgre {

	#realizar a conexao com o banco de dados
	public function conectaDB(){
		try {
			$Con = new PDO("pgsql:host=localhost;dbname=web_trabalho","magno","123");
			return $Con;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}
?>