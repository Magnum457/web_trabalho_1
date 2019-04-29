<?php
	include("../../model/conexao/Cadastro.php");
    $configs = include_once("../../config.php");

    if(isset($_POST["produto_altera"])){
        $id = $_POST["produto_altera"];
        // echo "vi a alegria chegar quando recebi um telegrama";
    }else if(isset($_GET["produto_altera"])){
        $id = $_GET["produto_altera"];
        // echo "me liga, manda um telegrama, uma carta de amor";
    }else{
        $id = "";
    }

    $Crud = new Cadastro();
    $BFetch = $Crud->selectDB("*", "produto", "where id = ?", array($id));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);

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
        <form action="../../control/produto/ControleProduto.php" method="post" id="formCadastro">
            <fieldset>
                <legend>Novo Produto</legend>
                <!-- descrição do produto -->
                <div class="row"> 
                    <label for="descricao_produto">Descrição</label>
                    <input type="text" name="descricao_produto" id="descricao_produto" value=<?=$Fetch["descricao"]?> />
                </div>
                <!-- categoria -->
                <div class="row">
                    <label for="id_categoria">Categoria</label>
                    <select name="id_categoria" id="id_categoria">
                        <option value="">Selecione</option>
                        <?php
                            $Crud = new Cadastro();
                            $DFetch = $Crud->selectDB("*", "categoria", "", array());
                            while ($Metch=$DFetch->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option 
                            value=<?=$Metch['id']?> 
                            <?=($Metch['id'] == $Fetch['id_categoria'])?'selected':''?>
                            >
                            <?=$Metch['descricao']?>   
                         </option>
                        <?php 
                            }
                        ?>
                    </select>
                </div>
                <!-- preço -->
                <div class="row">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" value=<?=$Fetch["preco"];?> />
                </div>
                <input type="hidden" name="id_produto" value=<?=$Fetch["id"];?> />
                <input type="hidden" name="operacao" value="alterar" />
                <input type="submit" value="Salvar" />    
            </fieldset>
        </form>
</body>
</html>