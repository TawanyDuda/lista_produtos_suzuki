<?php
require 'model\CategoriaModelG.php';

$objUser = new Usuario();

if(isset($_POST['cad-categoria'])){
    echo "<script>alert('deu certo')<\script>";
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method = "POST">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="descricao" placeholder="desc">
        <button name="cad-categoria"> Cadastrar</button>
    </form>

</body>
</html>