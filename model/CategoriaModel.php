<?php
require_once __DIR__."/../config/Database.php";

class CategoriaModel{

    private $conn;
    private $tabela = "categorias";
    public $id;

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

    public function criar($categoria){
        $query = "INSERT INTO $this->tabela (nome,descricao) VALUES (:nome,descricao)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome,descricao", $categoria['nome,descricao']);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function excluir($id){
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        // $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->rowCount() > 0; 
    }

    public function editar($id){
        $query = "UPDATE  $this->tabela SET nome = :nome descricao = :descricao WHERE id = :id";
        

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        // $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->rowCount() > 0; 
    }
}


?>
