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

    if ($_SERVER["REQUEST_METHOD"]=== "POST"){
        $id = $_POST["id"];
        $categoriaModel->excluir($id);
        if ($categoriaModel){
            return header("Location: categorias.php?");
        
        }
    }

?>

<?php require_once  __DIR__ . '\..\components\head.php' ; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Categorias</h1>

        <div>
            <a href="categorias-criar.php">
                <!-- Funcionalidade de adicionar nova categoria-->
                <button >
                    <span >Novo</span>
                    <span class="material-symbols-outlined">
                        add
                    </span>
                </button> 
            </a>
            
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach ($lista as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria['id'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td><?php echo $categoria['descricao'] ?></td>
                        <td>
                            <!-- METHODS - Get(pesquisa) / Post(atualiza) -->
                            <form action="categorias-editar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $categoria['id']?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <!-- Funcionalidade de excluir uma categoria -->

                            <form action="categorias.php" method="POST" >
                                <input 
                                type="hidden" 
                                name="id" 
                                value="<?php echo $categoria['id'] ?>">

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