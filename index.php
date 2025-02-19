<?php

require_once './model/produtoModel.php'

$produtoModel = new produtoModel();

echo "<pre>"
print_r($produtoModel ->buscar_id)
echo "<\pre>"