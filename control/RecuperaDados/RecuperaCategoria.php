<?php
	# imports
	include_once($configs->CONTROLPATH."ObterDados.php");
	include_once($configs->MODELPATH."negocio/CategoriaNegocio.php");
	include_once($configs->MODELPATH."classes/Categoria.php");

	class RecuperaCategoria{
		# recupera a lista de categoria
		public static function listaCategoria(){
			$Negocio = new CategoriaNegocio();
			$res = $Negocio->listar();
			return $res;
		}
		# obter a categoria pesquisada
		public static function obterCategoria($id_categoria){
			$Negocio = new CategoriaNegocio($id_categoria);
			$res = $Negocio->obter($id_categoria);
			$categoria = $res->fetch(PDO::FETCH_ASSOC);
			return $categoria;
		}
	}
?>