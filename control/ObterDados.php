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

		# atributos do cliente
			# login_cliente
			if (isset($_POST["login_cliente"])) {
				$login_cliente = $_POST["login_cliente"];
			} elseif(isset($_GET["login_cliente"])){
				$login_cliente = $_GET["login_cliente"];
			}else {
				$login_cliente = "";
			}
			# nome_cliente
			if (isset($_POST["nome_cliente"])) {
				$nome_cliente = $_POST["nome_cliente"];
			} elseif(isset($_GET["nome_cliente"])){
				$nome_cliente = $_GET["nome_cliente"];
			}else {
				$nome_cliente = "";
			}
			# senha_cliente
			if (isset($_POST["senha_cliente"])) {
				$senha_cliente = $_POST["senha_cliente"];
			} elseif(isset($_GET["senha_cliente"])){
				$senha_cliente = $_GET["senha_cliente"];
			}else {
				$senha_cliente = "";
			}

		# atributos do funcionario
			# login_funcionario
			if (isset($_POST["login_funcionario"])) {
				$login_funcionario = $_POST["login_funcionario"];
			} elseif(isset($_GET["login_funcionario"])){
				$login_funcionario = $_GET["login_funcionario"];
			}else {
				$login_funcionario = "";
			}
			# nome_funcionario
			if (isset($_POST["nome_funcionario"])) {
				$nome_funcionario = $_POST["nome_funcionario"];
			} elseif(isset($_GET["nome_funcionario"])){
				$nome_funcionario = $_GET["nome_funcionario"];
			}else {
				$nome_funcionario = "";
			}
			# senha_funcionario
			if (isset($_POST["senha_funcionario"])) {
				$senha_funcionario = $_POST["senha_funcionario"];
			} elseif(isset($_GET["senha_funcionario"])){
				$senha_funcionario = $_GET["senha_funcionario"];
			}else {
				$senha_funcionario = "";
			}
			# salario
			if (isset($_POST["salario"])) {
				$salario = $_POST["salario"];
			} elseif(isset($_GET["salario"])){
				$salario = $_GET["salario"];
			}else {
				$salario = "";
			}

		# atributos da categoria
			# id_categoria
			if (isset($_POST["id_categoria"])) {
				$id_categoria = $_POST["id_categoria"];
			} elseif(isset($_GET["id_categoria"])){
				$id_categoria = $_GET["id_categoria"];
			}else {
				$id_categoria = 0;
			}
			# descricao_categoria
			if (isset($_POST["descricao_categoria"])) {
				$descricao_categoria = $_POST["descricao_categoria"];
			} elseif(isset($_GET["descricao_categoria"])){
				$descricao_categoria = $_GET["descricao_categoria"];
			}else {
				$descricao_categoria = "";
			}

		# atributos do produto
			# id_produto
			if (isset($_POST["id_produto"])) {
				$id_produto = $_POST["id_produto"];
			} elseif(isset($_GET["id_produto"])){
				$id_produto = $_GET["id_produto"];
			}else {
				$id_produto = 0;
			}
			# descricao_produto
			if (isset($_POST["descricao_produto"])) {
				$descricao_produto = $_POST["descricao_produto"];
			} elseif(isset($_GET["descricao_produto"])){
				$descricao_produto = $_GET["descricao_produto"];
			}else {
				$descricao_produto = "";
			}
			# preco
			if (isset($_POST["preco"])) {
				$preco = $_POST["preco"];
			} elseif(isset($_GET["preco"])){
				$preco = $_GET["preco"];
			} else {
				$preco = "";
			}

		# atributos para o login
			# login
			if (isset($_POST["login"])) {
				$login = $_POST["login"];
			} elseif(isset($_GET["login"])) {
				$login = $_GET["login"];
			} else {
				$login = "";
			}
			# senha
			if (isset($_POST["senha"])) {
				$senha = $_POST["senha"];
			} elseif(isset($_GET["senha"])) {
				$senha = $_GET["senha"];
			} else {
				$senha = "";
			}
			
			
?>