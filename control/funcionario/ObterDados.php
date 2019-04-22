<?php
	# entradas
		# operacao
		if (isset($_POST["operacao"])) {
			$operacao = $_POST["operacao"];
		} elseif(isset($_GET["operacao"])){
			$operacao = $_GET["operacao"];
		}else {
			$operacao = "";
		}
		# login
		if (isset($_POST["login"])) {
			$login = $_POST["login"];
		} elseif(isset($_GET["login"])){
			$login = $_GET["login"];
		}else {
			$login = "";
		}
		# nome
		if (isset($_POST["nome"])) {
			$nome = $_POST["nome"];
		} elseif(isset($_GET["nome"])){
			$nome = $_GET["nome"];
		}else {
			$nome = "";
		}
		# senha
		if (isset($_POST["senha"])) {
			$senha = $_POST["senha"];
		} elseif(isset($_GET["senha"])){
			$senha = $_GET["senha"];
		}else {
			$senha = "";
		}
		# salario
		if (isset($_POST["salario"])) {
			$salario = $_POST["salario"];
		} elseif(isset($_GET["salario"])){
			$salario = $_GET["salario"];
		}else {
			$salario = "";
		}
?>