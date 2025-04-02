<?php

require_once __DIR__ . '\..\..\model\CategoriaModel.php';

$categoriaModel = new CategoriaModel();
$categoria = $categoriaModel->buscar_id($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <section class="container">
                <h2>Detalhes </h2>

            <h3>Nome:<?php echo $categoria->$id;?></h3>
            <p>Descrição:</p>


            <!-- Voltar para a listagem -->
            <form action="categorias.php" method="GET">
                <button title= "Voltar">
                <span class="material-symbols-outlined">
                    Voltar
                </span>
                </button>
            </form>
        </section>
    </table>
</body>
</html>