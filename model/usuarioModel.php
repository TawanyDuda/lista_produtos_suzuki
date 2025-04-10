<?php
require_once __DIR__."/../config/Database.php";

class UsuarioModel{
    private $conn;
    private $tabela ="usuarios";
    public $id;
    public $nome;
    public $descricao;

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
        $res = $stmt->fetch();

        return $res;
    }
    public function criar($nome,$email,$senha,$telefone,$data_nascimento,$cpf){
        $query = "INSERT INTO $this->tabela (nome,email,senha,telefone,data_nascimento,cpf) VALUES (:nome,:email,:senha,:telefone,:data_nascimento,:cpf)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->execute();

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
    public function Editar($id,$nome,$email,$senha,$telefone,$data_nascimento,$cpf){
        $query = "UPDATE  $this->tabela SET nome = :nome, email = :email, senha = :senha, telefone = :telefone, data_nascimento = :data_nascimento, cpf = :cpf WHERE id = :id";
        // print_r($id);
        

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->execute();


        return $stmt->rowCount() > 0; 
    }
}

?>