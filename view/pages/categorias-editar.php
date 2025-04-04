<?php

require_once __DIR__ . "/../../model/CategoriaModel.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET["id"];

    if ($id == "") {

        return header("location: categorias.php");
    }
    $categoriaModel = new CategoriaModel();
    $categoria = $categoriaModel->buscar_id($id);
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    $categoria = new CategoriaModel();
    $res = $categoria->Editar($id, $nome, $descricao);

    if ($res) {
        return header("Location: categorias.php?mensagem=sucesso");
    } else {
        return header("Location: categorias.php?mensagem=erro");
    }
}
?>
<?php require_once __DIR__ . '\..\components\head.php'; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <form action="categorias-editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $categoria['id'] ?>">
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" value="<?php echo $categoria['nome'] ?>" required>
            </div>
            <div>
                <label for="descricao">Descricao: </label>
                <input type="text" name="descricao" value="<?php echo $categoria['descricao'] ?>" required>
            </div>
            <button>
                Salvar
            </button>
        </form>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>

</html>
