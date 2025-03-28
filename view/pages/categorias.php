<?php
    require_once __DIR__."/../../model/CategoriaModel.php";

    //modo edição ou criação
    if (isset($_GET['id'])){
        $modo = 'EDIÇÃO';
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->buscar_id($_GET['id']);
    } else{
        $modo = 'CRIAÇÃO';
        $categoria = [
            'id'=> '',
            'nome'=>'',
        ];
    }


    $categoriaModel = new CategoriaModel();
    $lista =$categoriaModel->listar();

?>

<?php require_once  __DIR__ . '\..\components\head.php' ; ?>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Categorias</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria['id'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td><?php echo $categoria['descricao'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $categoria['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>

                            <form action="cadastro.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $categoria['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST" action="lista_produtos_suzuki/view/pages/categorias.php">
                                <input type="hidden" name="id" value="<?php echo $categoria['id'] ?>">
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

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>