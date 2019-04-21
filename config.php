<?php
	# retorna um objeto com as configurações do sistema	
		return (object) array(
		    # diretórios
		    	'BASEPATH' => dirname(__FILE__).'/',
		    	'BASEURL' => "http://localhost/web_trabalho_1/",
		    	'VIEWPATH' => 'view/',
		    	'MODELPATH' => 'model/',
		    	'CONTROLPATH' => 'control/',
		    	'CSSPATH' => 'css/',
		    	'JSPATH' => 'js/',

		    # banco de dados
			    'host' => 'localhost',
			    'dbname' => 'web_trabalho',
			    'username' => 'magno',
			    'pass' => '123'
		);

?>