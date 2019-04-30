<?php $configs = include_once("../../config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Funcionário</title>
    <!-- arquivos de css -->
        <link rel="stylesheet" href="../../css/reset.css">
        <link rel="stylesheet" href="../../css/estilo_admin.css">
    <!-- fim do css -->
    <!-- arquivos de js -->
        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../../js/validate.js"></script>
        <script type="text/javascript" src="../../js/additional-methods.min.js"></script>
        <script type="text/javascript" src="../../js/localization/messages_pt_BR.js"></script>
    <!-- fim do js -->
</head>
<body>
    <!-- começo do header -->
        <?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
    <!-- fim do header -->
        <form action="../../control/modificaDados/ControleFuncionario.php" method="post" id="formCadastro">
            <fieldset class="cadastro">
                <legend>Novo funcionário</legend>
                <label for="nome">Nome:</label>
                <input type="text" name="nome_funcionario" id="nome" required/><br>
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