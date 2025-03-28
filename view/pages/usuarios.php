<?php
    require_once __DIR__ . "/../../config/usuarioModel.php";

    $produtoModel = new usuarioModel();
    $lista =$usuarioModel->listar();


?>


<?php require_once  __DIR__ . '\..\components\head.php' ; ?>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php' ; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php' ; ?>
    
    <main>
        <h1>usuarios</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>email</th>
                <th>senha</th>
                <th>telefone</th>
                <th>data_nascimento</th>
                <th>cpf</th>
                <th>genero</th>
                <th>foto_perfil</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['senha'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td><?php echo $usuario['data_nascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td><?php echo $usuario['genero'] ?></td>
                        <td><?php echo $usuario['foto_perfil'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>

                            <form action="cadastro.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button onclick="return confirm('Tem certeza que deseja excluir o produto?')">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>


    <?php require_once __DIR__ . '\..\components\footer.php' ; ?>
</body>
</html>