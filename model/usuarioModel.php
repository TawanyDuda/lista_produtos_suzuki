<?php
require_once __DIR__."/../config/Database.php";

class UsuarioModel{
    private $conn;
    private $tabela ="usuarios";

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