<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Cliente</title>
    <!-- arquivos de css -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo_admin.css">
    <!-- fim do css -->
    <!-- arquivos de js -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
        <script type="text/javascript" src="js/additional-methods.min.js"></script>
        <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>
    <!-- fim do js -->
</head>
<body>
    <!-- começo do header -->
        
    <!-- fim do header -->
        <form action="control/cliente/ControleCliente.php" method="post" id="formCadastro">
            <fieldset class="cadastro">
                <legend>Novo cliente</legend>
                    <label for="nome_cliente">Nome:</label>
                    <input type="text" name="nome_cliente" id="nome_cliente" class="form-control" /><br>    
                    <label for="login_cliente">Login:</label>
                    <input type="text" name="login_cliente" id="login_cliente" class="form-control"/><br>    
                    <label for="senha_cliente">Senha:</label>
                    <input type="password" name="senha_cliente" id="senha_cliente" class="form-control"/><br>
                    <input type="hidden" name="operacao" value="inserir_inicio" />
                    <input type="submit" value="Salvar" />
            </fieldset>
        </form>
</body>
</html>