<?php

require_once __DIR__ . "/../../model/produtoModel.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET["id"];

    if ($id == "") {

        return header("location: produtos.php");
    }
    $produto = new Produto();
    $produtoModel = $produto->buscar_id($id);
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $id_categoria = $_POST["id_categoria"];

    $produtoModel = new Produto();
    $res = $produtoModel->Editar($id,$nome,$descricao,$preco,$id_categoria);

    if ($res) {
        return header("Location: produtos.php?mensagem=sucesso");
    } else {
        return header("Location: produtos.php?mensagem=erro");
    }
}
?>
<?php require_once __DIR__ . '\..\components\head.php'; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <form action="produtos-editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $produtoModel['id'] ?>">
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" value="<?php echo $produtoModel['nome'] ?>" required>
            </div>
            <div>
                <label for="descricao">Descricao: </label>
                <input type="text" name="descricao" value="<?php echo $produtoModel['descricao'] ?>" required>
            </div>
            <div>
                <label for="preco">Preco: </label>
                <input type="float" name="preco" value="<?php echo $produtoModel['preco'] ?>" required>
            </div>
            <div>
                <label for="id_categoria">id_categoria: </label>
                <input type="int" name="id_categoria" value="<?php echo $produtoModel['id_categoria'] ?>" required>
            </div>
            <button>
                Salvar
            </button>
        </form>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>

</html>