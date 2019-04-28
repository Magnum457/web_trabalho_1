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
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/estilo_admin.css">
</head>
<body>
    <!-- começo do header -->
        <?php include_once($configs->VIEWPATH."headers/header_admin.php");?>
    <!-- fim do header -->
	 <h1>Novo Produto</h1>
        <form action="../../control/produto/ControleProduto.php" method="post">
            <div>Descricao:</div>
            <div><input type="text" name="descricao_produto" value=<?=$Fetch["descricao"]?>/></div>
            <div>Categoria:</div>
            <div>
            	<select name="id_categoria">
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
            <div>Preço:</div>
            <div><input type="text" name="preco" value=<?=$Fetch["preco"];?> /></div>
            <div><input type="hidden" name="id_produto" value=<?=$Fetch["id"];?> /></div>
            <div><input type="hidden" name="operacao" value="alterar" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>