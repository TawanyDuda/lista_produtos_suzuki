<?php
require_once __DIR__."/../config/Database.php";
class Produto{
    private $conn;
    private $tabela = "produtos";
    public $id;

    public $nome;

    public $descricao;

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

    public function Editar($id,$nome,$descricao,$preco,$id_categoria){
        $query = "UPDATE  $this->tabela SET nome = :nome, descricao = :descricao, preco = :preco, imagem = :imagem WHERE id = :id";
        print_r($id);
        

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->execute();

        // $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->rowCount() > 0; 
    }
    public function excluir($id){
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        // $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->rowCount() > 0; 
    }

    public function criar($nome,$descricao,$preco,$id_categoria){
        $query = "INSERT INTO $this->tabela (nome,descricao,preco,id_categoria) VALUES (:nome,:descricao,:preco,:id_categoria)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->execute();

        return $stmt->rowCount() > 0;
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
