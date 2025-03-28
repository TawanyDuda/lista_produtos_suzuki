<?php

require_once './model/produtoModel.php';

$ProdutoModel = new Produto();

echo "<pre>";
print_r($ProdutoModel -> buscar_id($id));
echo "<\pre>";