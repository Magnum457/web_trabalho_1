<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Funcionário</title>
</head>
<body>
	 <h1>Novo funcionário</h1>
        <form action="../../control/funcionario/ControleFuncionario.php" method="post">
            <div>Nome:</div>
            <div><input type="text" name="nome" /></div>
            <div>Login:</div>
            <div><input type="text" name="login" /></div>
            <div>Senha:</div>
            <div><input type="password" name="senha" /></div>
            <div>Salario:</div>
            <div><input type="text" name="salario" /></div>
            <div><input type="hidden" name="operacao" value="inserir" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>