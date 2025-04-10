<?php

require_once __DIR__ . '\..\..\model\CategoriaModel.php';
// Verificar se é o método POST
if (isset($_POST['cadastrar'])) {
    $nome = $_POST["nome"];
    $descricao = $_POST['descricao'];



    $categoria = new CategoriaModel();

    // Executo a função  de criar/ editar no model
    if (empty($_POST['id'])) {
        // CRIAR
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $res = $categoria->criar($nome, $descricao);
        if ($res) {

            // echo "<script> alert('certo') </script>";
            header("location: categorias.php?status=sucesso");
        } else {
            // echo "<script> alert('errado') </script>";
            header("location: categorias.php?status=erro");
        }
    } else {
        //EDITAR
        $res = $categoria->Editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
        ]);
        return "SUCESSO";
    }
    if ($res) {
        return "ERRO";
    }
    return header('location:categorias.php');
}

?>

<!DOCTYPE html>
<html lang="en">

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
                <button name="cadastrar">
                    confirmar
                </button>
            </form>
            <!-- Voltar a listagem de categorias -->
            <form action="categorias.php" method="GET">
                <button type="submit" title="Voltar">
                    <span>
                        Voltar
                    </span>
                </button>
            </form>
        </section>
    </main>

</body>

</html>