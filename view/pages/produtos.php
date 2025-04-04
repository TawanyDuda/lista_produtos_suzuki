<?php
    require_once __DIR__ . "/../../model/produtoModel.php";

    require_once __DIR__."/../../model/CategoriaModel.php";

    //modo edição ou criação
    if (isset($_GET['id'])){
        $modo = 'EDIÇÃO';
        $produtoModel = new produto();
        $produto = $produtoModel->buscar_id($_GET['id']);
    } else{
        $modo = 'CRIAÇÃO';
        $produto = [
            'id'=> '',
            'nome'=>'',
            'descricao'=>'',
            'preco'=>'',
            'id_categoria',
        ];
    }


    $produto = new produto();
    $lista =$produto->listar();

    if ($_SERVER["REQUEST_METHOD"]=== "POST"){
        $id = $_POST["id"];
        $produto->excluir($id);
        if ($produto){
            return header("Location: produtos.php?");
        
        }
    }

?>


<?php require_once  __DIR__ . '\..\components\head.php' ; ?>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php' ; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php' ; ?>
    
    <main>
        <h1>Produtos</h1>
        <div>
            <a href="produtos-criar.php">
                <!-- Funcionalidade de adicionar novo produto-->
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
                        <td><?php echo $produto['preco'] ?></td>
                        <td><?php echo $produto['id_categoria'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            
                            <form action="cadastrar-produtos.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <!-- Funcionalidade de excluir uma categoria -->

                            <form action="produtos.php" method="POST" >
                                <input 
                                type="hidden" 
                                name="id" 
                                value="<?php echo $produto['id'] ?>">

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