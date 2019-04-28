<?php $configs = include_once("../../config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
    <!-- começo do header -->
        <?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
    <!-- fim do header -->
        <form action="../../control/funcionario/ControleFuncionario.php" method="post">
            <fieldset class="cadastro">
                <legend>Novo funcionário</legend>
                <label for="nome">Nome:</label>
                <input type="text" name="nome_funcionario" id="nome" required /><br>
                <label for="login">Login:</label>
                <input type="text" name="login_funcionario" id="login" required/><br>
                <label for="senha">Senha:</label>
                <input type="text" name="senha_funcionario" id="senha" required/><br>
                <label for="salario">Salario:</label>
                <input type="text" name="salario" id="salario" required/><br>
                <input type="hidden" name="operacao" value="inserir" />
                <input type="submit" value="Salvar" />
            </fieldset>
        </form>
</body>
</html>