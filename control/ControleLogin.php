<?php
	include_once("ObterDados.php");
	$configs = include_once("../config.php");
	include_once('RecuperaDados/RecuperaUsuario.php');

	$cliente = RecuperaUsuario::obterCliente($login);
	$funcionario = RecuperaUsuario::obterFuncionario($login);

	if ($cliente) {
		session_start();
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;
		header("Location: ../cliente.php");
	} elseif($funcionario) {
		session_start();
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;
		header("Location: ../admin.php");
	} else {
		echo "Dados incorretos";
	}
	
?>