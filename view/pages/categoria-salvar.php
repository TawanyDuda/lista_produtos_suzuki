<?php

require_once __DIR__ . '\..\..\model\CategoriaModel.php';
// Verificar se é o método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $categoriaModel = new CategoriaModel();

    // Executo a função  de criar/ editar no model
    if(empty($_POST['id'])){
        // CRIAR
        $sucesso =$categoriaModel->criar([
            'nome'=>$_POST['nome'],
            'descricao'=>$_POST['descricao'],
        ]);
    }else{
        //EDITAR
        $sucesso =$categoriaModel->editar([
            'id'=>$_POST['id'],
            'nome'=>$_POST['nome'],
            'descricao'=>$_POST['descricao'],
        ]);
    }
    if (!$sucesso){
        return "ERRO";
    } 
        return header('location:categorias.php');

}


// Pegar oos dados do formulário
// Executo a função de criar/editar do Model

// ?>

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1>helloo world</h1>
// </body>
// </html>








