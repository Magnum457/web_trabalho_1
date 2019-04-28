<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
    <!-- começo do header -->
        
    <!-- fim do header -->
        <form action="control/cliente/ControleCliente.php" method="post">
            <fieldset class="cadastro">
                <legend>Novo cliente</legend>
                <label for="nome">Nome:</label>
                <input type="text" name="nome_cliente" id="nome" required /><br>
                <label for="login">Login:</label>
                <input type="text" name="login_cliente" id="login" required/><br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha_cliente" id="senha" required/><br>
                <input type="hidden" name="operacao" value="inserir_inicio" />
                <input type="submit" value="Salvar" />
            </fieldset>
        </form>
</body>
</html>