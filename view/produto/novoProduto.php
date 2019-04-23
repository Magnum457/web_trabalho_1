<?php
	include("../../model/conexao/Cadastro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Produto</title>
</head>
<body>
	 <h1>Nova categoria</h1>
        <form action="../../control/produto/ControleProduto.php" method="post">
            <div>Descricao:</div>
            <div><input type="text" name="descricao" /></div>
            <div>Categoria:</div>
            <div>
            	<select name="id_categoria">
            		<option value="">Selecione</option>
            		<?php
						$Crud = new Cadastro();
						$BFetch = $Crud->selectDB("*", "categoria", "", array());
						while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
					?>
					<option value=<?php echo $Fetch['id'] ?> ><?php echo $Fetch['descricao'] ?> </option>
					<?php
						}
            		?>
            	</select>
            </div>
            <div>Preço:</div>
            <div><input type="text" name="preco" /></div>
            <div><input type="hidden" name="operacao" value="inserir" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>