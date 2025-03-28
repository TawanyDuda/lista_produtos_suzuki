<?php
    require_once __DIR__ . "/../../config/produtoModel.php";

    $produtoModel = new Produto();
    $lista = $produtoModel->listar();

?>


<?php require_once  __DIR__ . '\..\components\head.php' ; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php' ; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php' ; ?>
    
    <main>
        <h1>Produtos</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>descrição</th>
                <th>categoria</th>
                <th>Preço</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id'] ?></td>
                        <td><?php echo $produto['nome'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['categoria'] ?></td>
                        <td><?php echo $produto['preco'] ?></td>
                        <!-- <td><?php echo $produto['imagem'] ?></td> -->
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="visualizar-produtos.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>

                            <form action="cadastrar-produtos.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
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