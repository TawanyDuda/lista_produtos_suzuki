<?php

require_once __DIR__ . "/../../model/usuarioModel.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET["id"];

    if ($id == "") {

        return header("location: usuarios.php");
    }
    $usuarioModel = new usuarioModel();
    $usuario = $usuarioModel->buscar_id($id);
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];

    $usuario = new usuarioModel();
    $res = $usuario->Editar($nome,$email,$senha,$telefone,$data_nascimento,$cpf);

    if ($res) {
        return header("Location: usuarios.php?mensagem=sucesso");
    } else {
        return header("Location: usuarios.php?mensagem=erro");
    }
}
?>
<?php require_once __DIR__ . '\..\components\head.php'; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <form action="usuarios-editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" value="<?php echo $usuario['nome'] ?>" required>
            </div>
            <div>
                <label for="descricao">Email: </label>
                <input type="text" name="email" value="<?php echo $usuario['descricao'] ?>" required>
            </div>
            <div>
                <label for="descricao">Senha: </label>
                <input type="text" name="senha" value="<?php echo $usuario['senha'] ?>" required>
            </div>
            <div>
                <label for="descricao">Telefone: </label>
                <input type="text" name="telefone" value="<?php echo $usuario['telefone'] ?>" required>
            </div>
            <div>
                <label for="descricao">Data de nascimento: </label>
                <input type="text" name="data_nascimento" value="<?php echo $usuario['data_nascimento'] ?>" required>
            </div>
            <div>
                <label for="descricao">CPF: </label>
                <input type="text" name="cpf" value="<?php echo $usuario['cpf'] ?>" required>
            </div>
            <button>
                Salvar
            </button>
        </form>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>

</html>
