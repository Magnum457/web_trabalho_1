<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Cliente</title>
</head>
<body>
	 <h1>Novo cliente</h1>
        <form action="../../control/cliente/ControleCliente.php" method="post">
            <div>Nome:</div>
            <div><input type="text" name="nome" /></div>
            <div>Login:</div>
            <div><input type="text" name="login" /></div>
            <div>Senha:</div>
            <div><input type="password" name="senha" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>