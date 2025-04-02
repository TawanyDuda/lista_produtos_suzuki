<?php
class Database {
    private $conn;
    private $host ='localhost';
    private $port ='3306';
    private $dbName='produtos_suzuki';
    private $user = 'root';
    private $password='';


    public function conectar(){
        $url = "mysql:host=$this->host;port=$this->port;dbname=$this->dbName";
        $conn = new PDO($url,$this->user, $this->password);
        return $conn;
    }
}

