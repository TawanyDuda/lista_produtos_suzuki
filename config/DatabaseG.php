<?php

Class DatabaseG {
    private $conn;
    private string $server = "localhost";
    private string $db = "pessoas";
    private string $user = "root";
    private string $pass = "";
    private $table;

    public function __construct($table = null) {
        $this->table = $table;
        $this->conectar();
    }

    public function conectar() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->db . ";", $this->user, $this->pass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\Throwable $th) {
            
            echo "<pre>";
            print_r($th->getMessage());
            echo "</pre>";
        }
    }

    public function execute($query, $binds = []){
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);

            return $stmt;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function insert($values){
        try {
            $fields = array_keys($values);
            $binds = array_fill(0, count($fields), '?');

            $query = 'INSERT INTO ' . $this->table . ' (' . implode(',',$fields) . ') VALUES (' . implode(',', $binds) . ')';

            $res = $this->execute($query, array_values($values));

            return $res ? true : false;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function select($fields = '*'){
        try {
            $query = "SELECT ". $fields ."FROM ". $this->table . ";";

            return $this->execute($query);
        } catch (\Throwable $th) {
            //throw $th;
            // echo '<pre>';
            // echo print_r( $query );
            // echo '</pre>';
        }
    }

    public function delete($where){
        try {

            // DELETE FROM dados_pessoais WHERE id = 1;
            $query = "DELETE FROM " . $this->table . " WHERE " . $where;
            $del = $this->execute($query);
            $del = $del->rowCount(); // faz uma contagem de linhas deletedas.

            if($del == 1){
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update($where, $array){
        try {
            $fields = array_keys($array);
            $values = array_values($array);

            $query = "UPDATE " . $this->table . " SET " . implode("=?,", $fields) . "=? WHERE " . $where;

            $res = $this->execute($query, $values);

            return $res->rowCount();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
?>