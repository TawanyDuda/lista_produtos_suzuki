<?php
    require_once __DIR__ . "/../../model/usuarioModel.php";

    $usuarioModel = new usuarioModel();
    $lista =$usuarioModel->listar();

        //modo edição ou criação
        if (isset($_GET['id'])){
            $modo = 'EDIÇÃO';
            $usuarioModel = new usuarioModel();
            $usuario = $usuarioModel->buscar_id($_GET['id']);

            
        } else{
            $modo = 'CRIAÇÃO';
            $usuario = [
                'id'=> '',
                'nome'=>'',
                'email'=>'',
                'senha'=>'',
                'telefone'=>'',
                'data_nascimento'=>'',
                'cpf'=>'',
            ];
        }
    
    
        $usuarioModel = new usuarioModel();
        $lista =$usuarioModel->listar();
    
        if ($_SERVER["REQUEST_METHOD"]=== "POST"){
            $id = $_POST["id"];
            $usuarioModel->excluir($id);
            if ($usuarioModel){
                return header("Location: usuarios.php?");
            
            }
        }


?>


<?php require_once  __DIR__ . '\..\components\head.php' ; ?>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php' ; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php' ; ?>
    
    <main>
        <h1>usuarios</h1>
        <div>
            <a href="usuarios-criar.php">
                <!-- Funcionalidade de adicionar novo usuario-->
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
                <th>email</th>
                <th>senha</th>
                <th>telefone</th>
                <th>data_nascimento</th>
                <th>cpf</th>
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
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="usuarios-editar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="usuarios.php" method="POST">
                                <input 
                                type="hidden" 
                                name="id" 
                                value="<?php echo $usuario['id'] ?>">

                                <button onclick="return confirm('Tem certeza que deseja excluir o usuario?')">
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