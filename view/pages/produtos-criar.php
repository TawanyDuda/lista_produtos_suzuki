<?php

require_once __DIR__ . "/../../model/produtoModel.php";
// Verificar se é o método POST
if (isset($_POST['cadastrar'])) {
    $nome = $_POST["nome"];
    $descricao = $_POST['descricao'];
    $nome = $_POST["preco"];
    $descricao = $_POST['id_categoria'];

    $produto = new produto();

    // Executo a função  de criar/ editar no model
    if (empty($_POST['id'])) {
        // CRIAR
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $id_categoria = $_POST['id_categoria'];


        $res = $produto->criar($nome, $descricao, $preco, $id_categoria);
        if ($res) {

            // echo "<script> alert('certo') </script>";
            header("location: produtos.php?status=sucesso");
        } else {
            // echo "<script> alert('errado') </script>";
            header("location: produtos.php?status=erro");
        }
    } else {
        //EDITAR
        $res = $produto->Editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'id_categoria' => $_POST['id_categoria'],

        ]);
        return "SUCESSO";
    }
    if ($res) {
        return "ERRO";
    }
    return header('location:produtos.php');
}

?>
<?php require_once __DIR__ . '\..\components\head.php'; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <section>
            <form method="POST">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" required>
                </div>
                <div>
                    <label for="descricao">Descrição: </label>
                    <input type="text" name="descricao" required>
                </div>
                <div>
                    <label for="preco">Preco: </label>
                    <input type="text" name="preco" required>
                </div>
                <div>
                    <label for="id_categoria">id_categoria: </label>
                    <input type="text" name="id_categoria" required>
                </div>
                <button name="cadastrar">
                    confirmar
                </button>
            </form>
            <!-- Voltar a listagem de produtos -->
            <form action="produtos.php" method="GET">
                <button type="submit" title="Voltar">
                    <span>
                        Voltar
                    </span>
                </button>
            </form>
        </section>
        <?php require_once __DIR__ . '\..\components\footer.php'; ?>

    </main>