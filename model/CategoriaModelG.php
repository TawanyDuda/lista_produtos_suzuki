<?php
require_once __DIR__."/../config/Database.php";

class CategoriaModel{

    public int $id;
    public string $nome;

    public string $descricao;

    // private $tabela = "categorias";

    public function cadastrar(){
        $db = new databaseG("categorias");

       $res = $db->insert([
        "nome"=>$this->nome,
        "descricao"=>$this->descricao
       ]
       );
       return $res;
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