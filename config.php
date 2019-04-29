<?php
	# retorna um objeto com as configurações do sistema	
		return (object) array(
		    # diretórios
		    	'BASEPATH' => dirname(__FILE__).'/',
		    	'BASEURL' => "http://localhost/web_trabalho_1/",
		    	'VIEWPATH' => dirname(__FILE__).'/view/',
		    	'MODELPATH' => dirname(__FILE__).'/model/',
		    	'CONTROLPATH' => dirname(__FILE__).'/control/',
		    	'CSSPATH' => dirname(__FILE__).'/css/',
		    	'JSPATH' => dirname(__FILE__).'/js/',

		    # banco de dados
			    'host' => 'localhost',
			    'dbname' => 'web_trabalho',
			    'username' => 'magno',
			    'pass' => '123'
		);

?>