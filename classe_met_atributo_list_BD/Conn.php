<?php

class Conn {
    public $host   = "localhost";
    public $user   = "root";
    public $pass   = "";
    public $dbname = "PHPOO";
    public $port   = 3306;
    public $connect = null;
    
    public function conectar() {
        try {
            $this->connect = new PDO('mysql:host='. $this->host . ';port='.
                $this->port . ';dbname=' . $this->dbname , $this->user , $this->pass );
            //echo "Conexão com banco de dados realizada com sucesso!";
            return $this->connect;
        } catch (Exception $ex) {
           // echo "Conexão não realizada com sucesso! Erro: " . $ex;
            return false;
        }  
    }
    
    
}
