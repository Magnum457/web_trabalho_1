<?php
	# imports
	include_once($configs->CONTROLPATH."ObterDados.php");
	include_once($configs->MODELPATH."negocio/UsuarioNegocio.php");
	include_once($configs->MODELPATH."classes/Usuario.php");
	include_once($configs->MODELPATH."classes/Funcionario.php");

	class RecuperaUsuario{
		# recupera a lista de clientes
		public static function listaCliente(){
			$Negocio = new UsuarioNegocio();
			$res = $Negocio->listarCliente();
			return $res;
		}
		# recupera a lista de funcionários
		public static function listaFuncionario(){
			$Negocio = new UsuarioNegocio();
			$res = $Negocio->listarFuncionario();
			return $res;
		}
		# obter o cliente pesquisado
		public static function obterCliente($login_cliente){
			$Negocio = new UsuarioNegocio($login_cliente);
			$res = $Negocio->obterCliente($login_cliente);
			$cliente = $res->fetch(PDO::FETCH_ASSOC);
			return $cliente;
		}
		# obter o funcionario pesquisado
		public static function obterFuncionario($login_funcionario){
			$Negocio = new UsuarioNegocio($login_funcionario);
			$res = $Negocio->obterFuncionario($login_funcionario);
			$funcionario = $res->fetch(PDO::FETCH_ASSOC);
			return $funcionario;
		}
	}
?>