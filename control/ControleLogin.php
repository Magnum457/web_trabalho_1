<?php
	include_once("ObterDados.php");
	include_once("../model/conexao/Cadastro.php");

	$CRUD = new Cadastro();
	$resCliente = $CRUD->selectDB("*", "cliente", "where login = ? and senha = ?", array($login, $senha));
	$FetchCliente = $resCliente->fetch(PDO::FETCH_ASSOC);
	$resAdmin = $CRUD->selectDB("*", "funcionario", "where login = ? and senha = ?", array($login, $senha));
	$FetchAdmin = $resAdmin->fetch(PDO::FETCH_ASSOC);
	if ($FetchCliente["login"] != "") {
		session_start();
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;
		header("Location: ../cliente.php");
	} elseif($FetchAdmin["login"] != "") {
		session_start();
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;
		header("Location: ../admin.php");
	} else {
		echo $FetchCliente["login"]."\n";
		echo $FetchAdmin["login"]."\n";
	}
	
?>