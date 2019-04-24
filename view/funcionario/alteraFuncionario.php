<?php
    include("../../model/conexao/Cadastro.php");

    if(isset($_POST["funcionario_altera"])){
        $login = $_POST["funcionario_altera"];
        // echo "vi a alegria chegar quando recebi um telegrama";
    }else if(isset($_GET["funcionario_altera"])){
        $login = $_GET["funcionario_altera"];
        // echo "me liga, manda um telegrama, uma carta de amor";
    }else{
        $login = "";
    }

    $Crud = new Cadastro();
    $BFetch = $Crud->selectDB("*", "funcionario", "where login = ?", array($login));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    // var_dump($BFetch);
    // var_dump($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Funcionário</title>
</head>
<body>
	 <h1>Novo funcionário</h1>
        <form action="../../control/funcionario/ControleFuncionario.php" method="post">
            <div>Nome:</div>
            <div><input type="text" name="nome" value=<?php echo $Fetch["nome"]; ?>></div>
            <div>Login:</div>
            <div><input type="text" name="login" value=<?php echo $Fetch["login"]; ?> readonly/></div>
            <div>Senha:</div>
            <div><input type="password" name="senha" value=<?php echo $Fetch["senha"]; ?>></div>
            <div>Salario:</div>
            <div><input type="text" name="salario" value=<?php echo $Fetch["salario"]; ?> ></div>
            <div><input type="hidden" name="operacao" value="alterar" /></div>
            <div><input type="submit" value="Salvar" /></div>
        </form>
</body>
</html>