<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tela de Login</title>
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
	<form action="control/ControleLogin.php" method="post" name="formCadastro" id="formCadastro">
		<fieldset>
			<legend>Login</legend>
				<label for="login">Login: </label>
				<input type="text" name="login" id="login"><br>	
				<label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha"><br>	
				<input type="submit" value="logar">
		</fieldset>
	</form>
</body>
</html>