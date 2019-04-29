<?php
    include_once("../../model/conexao/Cadastro.php");
    $configs = include_once("../../config.php");

    if(isset($_POST["cliente_altera"])){
        $login = $_POST["cliente_altera"];
        // echo "vi a alegria chegar quando recebi um telegrama";
    }else if(isset($_GET["cliente_altera"])){
        $login = $_GET["cliente_altera"];
        // echo "me liga, manda um telegrama, uma carta de amor";
    }else{
        $login = "";
    }

    $Crud = new Cadastro();
    $BFetch = $Crud->selectDB("*", "cliente", "where login = ?", array($login));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    // var_dump($BFetch);
    // var_dump($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Cliente</title>
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
	 <h1>Novo cliente</h1>
        <form action="../../control/cliente/ControleCliente.php" method="post" id="formCadastro">
            <div>Nome:</div>
            <div><input type="text" name="nome_cliente" value=<?php echo $Fetch["nome"]; ?> /></div>
            <div>Login:</div>
            <div><input type="text" name="login_cliente" value=<?php echo $Fetch["login"]; ?> readonly /></div>
            <div>Senha:</div>
            <div><input type="password" name="senha_cliente" value=<?php echo $Fetch["senha"]; ?> /></div>
            <div><input type="hidden" name="operacao" value="alterar" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>