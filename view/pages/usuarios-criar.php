<?php

require_once __DIR__ . "/../../model/usuarioModel.php";
// Verificar se é o método POST
if (isset($_POST['cadastrar'])) {
    $nome = $_POST["nome"];
    $email = $_POST['email'];
    $senha = $_POST["senha"];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];

    $usuario = new UsuarioModel();

    // Executo a função  de criar/ editar no model
    if (empty($_POST['id'])) {
        // CRIAR
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];


        $res = $usuario->criar($nome,$email,$senha,$telefone,$data_nascimento,$cpf);
        if ($res) {

            // echo "<script> alert('certo') </script>";
            header("location: usuarios.php?status=sucesso");
        } else {
            // echo "<script> alert('errado') </script>";
            header("location: usuarios.php?status=erro");
        }
    } else {
        //EDITAR
        $res = $usuario->Editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'telefone' => $_POST['telefone'],
            'data_nascimento' => $_POST['data_nascimento'],
            'cpf' => $_POST['cpf'],
            

        ]);
        return "SUCESSO";
    }
    if ($res) {
        return "ERRO";
    }
    return header('location:usuarios.php');
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
                    <label for="email">Email: </label>
                    <input type="text" name="email" required>
                </div>
                <div>
                    <label for="senha">Senha: </label>
                    <input type="text" name="senha" required>
                </div>
                <div>
                    <label for="telefone">Telefone: </label>
                    <input type="text" name="telefone" required>
                </div>
                <div>
                    <label for="data_nascimento">Data de nascimento: </label>
                    <input type="text" name="data_nascimento" required>
                </div>
                <div>
                    <label for="cpf">CPF: </label>
                    <input type="text" name="cpf" required>
                </div>
                <button name="cadastrar">
                    confirmar
                </button>
            </form>
            <!-- Voltar a listagem de usuarios -->
            <form action="usuarios.php" method="GET">
                <button type="submit" title="Voltar">
                    <span>
                        Voltar
                    </span>
                </button>
            </form>
        </section>
        <?php require_once __DIR__ . '\..\components\footer.php'; ?>

    </main>