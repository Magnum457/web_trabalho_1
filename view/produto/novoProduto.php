<?php
	include("../../model/conexao/Cadastro.php");
    $configs = include_once("../../config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Produto</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
    <!-- começo do header -->
        <?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
    <!-- fim do header -->
        <form action="../../control/produto/ControleProduto.php" method="post">
            <fieldset class="cadastro">
                <legend>Nova categoria</legend>
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao_produto" id="descricao" required><br>
                <label for="id_categoria">Categoria</label>
                <select name="id_categoria" id="id_categoria" required>
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
                </select><br>
                <label for="preco">Preco</label>
                <input type="text" name="preco" id="preco">
                <input type="hidden" name="operacao" value="inserir" />
                <input type="submit" value="Salvar" />
            </fieldset>
        </form>
</body>
</html>