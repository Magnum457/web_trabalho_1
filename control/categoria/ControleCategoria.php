<?php
	# imports
	include("ObterDados.php");
	include("../../model/negocio/CategoriaNegocio.php");
	include("../../model/classes/Categoria.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new CategoriaNegocio();
			if ($Negocio->inserir($descricao)){
				echo "Deu certo";
			} else {
				echo "Não deu certo";
			}
			break;
		
		# alterar os dados
		case 'alterar':
			# code...
			break;

		# excluir os dados
		case 'excluir':
			# code...
			break;

		# listar os dados
		case 'listar':
			# code...
			break;

		# buscar os dados
		case 'buscar':
			# code...
			break;

		default:
			# code...
			break;
	}
?>