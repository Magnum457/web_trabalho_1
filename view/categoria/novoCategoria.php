<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Categoria</title>
</head>
<body>
	 <h1>Nova categoria</h1>
        <form action="../../control/categoria/ControleCategoria.php" method="post">
            <div>Descricao:</div>
            <div><input type="text" name="descricao" /></div>
            <div><input type="hidden" name="operacao" value="inserir" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>