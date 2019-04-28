<?php
	# imports
    $configs = include_once("config.php"); 
 //    include("model/conexao/Cadastro.php"); 
	// // $Crud = new Cadastro();

 // //    echo var_dump($Crud->conectaDB());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MagLoja</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<!-- começo do cabeçalho -->
        <header class = "container">
            <h1><img src="img/logo.png" alt="Logo da MagLoja"></h1>

            <p class="sacola">
                Nenhum item na sacola de compras
            </p>

            <nav class="menu-opcoes">
                <ul>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href=<?=$configs->BASEURL."control/ControleLogout.php"?>>Sair</a></li>  
                </ul>
            </nav>
        </header>
    <!-- fim do cabeçalho -->

    <!-- conteúdo da página -->
        <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore asperiores aperiam voluptatibus eius, deserunt fugit aut perferendis impedit eligendi voluptate, nobis labore maiores temporibus aspernatur et atque accusantium possimus repellat!</p>
        </div>
    <!-- fim do conteúdo da página -->

    <!-- Inicio do rodapé -->
        <?php include_once("view/footers/footer_cliente.php");?>
    <!-- Fim do rodapé -->
</body>
</html>