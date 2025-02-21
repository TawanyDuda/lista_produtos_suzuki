<?php

require_once './model/produtoModel.php';

$ProdutoModel = new Produto();

echo "<pre>";
print_r($ProdutoModel -> Buscar_id($id));
echo "<\pre>";