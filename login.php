<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tela de Login</title>
	<!-- arquivos de css -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo_admin.css">
        <link rel="stylesheet" href="css/bootstrap.css">
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
	<div class="container">
		<form action="control/ControleLogin.php" method="post" name="formCadastro" id="formCadastro">
			<fieldset>
				<legend>Login</legend>
				<div class="form-group">
					<label for="login">Login: </label>
					<input type="text" name="login" id="login" class="form-control">
				</div>
				<div class="form-group">
					<label for="senha">Senha: </label>
					<input type="password" name="senha" id="senha" class="form-control">
				</div>	
					<input type="submit" value="logar">
			</fieldset>
		</form>	
	</div>
	
</body>
</html>