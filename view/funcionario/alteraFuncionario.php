<?php
    # imports
    $configs = include_once("../../config.php");
    include_once("../../control/RecuperaDados/RecuperaUsuario.php");

    # recupera as variaveis
    if(isset($_POST["funcionario_altera"])){
        $login = $_POST["funcionario_altera"];
        // echo "vi a alegria chegar quando recebi um telegrama";
    }else if(isset($_GET["funcionario_altera"])){
        $login = $_GET["funcionario_altera"];
        // echo "me liga, manda um telegrama, uma carta de amor";
    }else{
        $login = "";
    }

    # recupera o funcionario
    $funcionario = RecuperaUsuario::obterFuncionario($login);
?>
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
	 <h1>Novo funcionário</h1>
        <form action="../../control/modificaDados/ControleFuncionario.php" method="post" id="formCadastro">
            <div>Nome:</div>
            <div><input type="text" name="nome_funcionario" value=<?= $funcionario["nome"]?>></div>
            <div>Login:</div>
            <div><input type="text" name="login_funcionario" value=<?= $funcionario["login"]?> readonly/></div>
            <div>Senha:</div>
            <div><input type="password" name="senha_funcionario" value=<?= $funcionario["senha"]?>></div>
            <div>Salario:</div>
            <div><input type="text" name="salario" value=<?= $funcionario["salario"]?> ></div>
            <div><input type="hidden" name="operacao" value="alterar" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>