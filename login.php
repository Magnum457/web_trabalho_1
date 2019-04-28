<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tela de Login</title>
</head>
<body>
	<form action="control/ControleLogin.php" method="post" name="login">
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