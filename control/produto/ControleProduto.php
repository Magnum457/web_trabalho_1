<?php
	# imports
	include("ObterDados.php");
	include("../../model/negocio/ProdutoNegocio.php");
	include("../../model/classes/Produto.php");

	# escolha de operação
	switch ($operacao) {
		# inserir os dados
		case 'inserir':
			$Negocio = new ProdutoNegocio();
			if ($Negocio->inserir($descricao, $id_categoria)){
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