<?php
require_once __DIR__."/../config/Database.php";
class Produto{
    private $conn;
    private $tabela = "produtos";

    public function __construct(){
        $db = new Database();
        $this ->conn = $db->conectar();
    }

    public function listar() {
        $query ="SELECT * FROM $this->tabela";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function buscar_id($id) {
        $query ="SELECT * FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}


//     public function listar(){
//         return $this->produtos;
//     }

//     public function buscar_id($id){
//         $indexProduto = -1;

//         $array_filtrado = array_filter(
//             $this->produtos, 
//             function ($produto, $index) use ($id, &$indexProduto){
//                 if($produto['id']==$id){
//                     $indexProduto = $index;
//                     return $produto;
//                 }
//             },
//                 ARRAY_FILTER_USE_BOTH
//         );
//             return $array_filtrado[$indexProduto];
//     }
// }
?>
