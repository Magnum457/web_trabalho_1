<?php
	# imports
    include_once("config.php"); 
 //    include("model/conexao/Cadastro.php"); 
	// // $Crud = new Cadastro();

 // //    echo var_dump($Crud->conectaDB());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tela Inicial</title>
</head>
<body>
	<div>Identificação do Usuário</div>
        <form action="LoginServlet" method="post">
            <div>Login:</div>
            <div><input type="text" name="login" /></div>
            <div>Senha:</div>
            <div><input type="password" name="senha" /></div>
            <div><input type="submit" value="Enviar" /></div>
        </form>
        <div><a href="view/cliente/novoCliente.php">Criar novo cliente</a></div>
</body>
</html>