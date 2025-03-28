<?php
require_once __DIR__."/../config/Database.php";

class CategoriaModel{

    private $conn;
    private $tabela = "categorias";

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
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

// public function Buscar_id($id){
//     $indexCategoria = -1;

//     $array_filtrado = array_filter(
//         $this->categorias, 
//         function ($categoria, $index) use ($id, &$indexCategoria){
//             if($categoria['id']==$id){
//                 $indexCategoria = $index;
//                 return $categoria;
//             }
//         },
//             ARRAY_FILTER_USE_BOTH
//     );
//         return $array_filtrado[$indexCategoria];
// }
// }
?>
