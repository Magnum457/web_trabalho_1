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
		# id
		if (isset($_POST["id"])) {
			$id = $_POST["id"];
		} elseif(isset($_GET["id"])){
			$id = $_GET["id"];
		}else {
			$id = "";
		}
		# descricao
		if (isset($_POST["descricao"])) {
			$descricao = $_POST["descricao"];
		} elseif(isset($_GET["descricao"])){
			$descricao = $_GET["descricao"];
		}else {
			$descricao = "";
		}
		# id_categoria
		if (isset($_POST["id_categoria"])) {
			$id_categoria = $_POST["id_categoria"];
		} elseif(isset($_GET["id_categoria"])){
			$id_categoria = $_GET["id_categoria"];
		}else {
			$id_categoria = "";
		}
?>