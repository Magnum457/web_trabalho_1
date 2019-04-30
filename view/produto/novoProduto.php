<?php
    # imports
    $configs = include_once("../../config.php");
    include_once("../../control/RecuperaDados/RecuperaCategoria.php");

    # recuperando a lista de categorias
    $lista = RecuperaCategoria::listaCategoria();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Produto</title>
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
        <form action="../../control/modificaDados/ControleProduto.php" method="post" id="formCadastro">
            <fieldset class="cadastro">
                <legend>Nova categoria</legend>
                <div class="row">
                    <label for="descricao_produto">Descricao</label>
                    <input type="text" name="descricao_produto" id="descricao_produto" required><br>    
                </div>
                <div class="row">
                    <label for="id_categoria">Categoria</label>
                    <select name="id_categoria" id="id_categoria" required>
                        <option value="">Selecione</option>
                        <?php
                            for ($i=0; $i < count($lista); $i++) { 
                        ?>
                        <option value=<?=$lista[$i]->getID()?> ><?=$lista[$i]->getDescricao()?> </option>
                        <?php
                            }
                        ?>
                    </select><br>    
                </div>
                <div class="row">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco">                    
                </div>
                <input type="hidden" name="operacao" value="inserir" />
                <input type="submit" value="Salvar" />
            </fieldset>
        </form>
</body>
</html>