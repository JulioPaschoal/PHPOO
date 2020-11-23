<?php

class Usuario {
    public $nome;
    public $email;
    
    
    public function cadastrar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "O usuario {$this->nome} com o e-mail {$this->email} foi cadastrado com sucesso!";
    }
    
     public function listar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "Lista de  usuarios {$this->nome} com o e-mail {$this->email}";
    }
    
     public function visualizar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "Vizualizar os usuarios {$this->nome} com o e-mail {$this->email}";
    }
    
    public function editar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "O usuario  {$this->nome} com o e-mail {$this->email} foi editado com sucesso!";
    }
    
    public function apagar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "O usuario  {$this->nome} com o e-mail {$this->email} foi deletado com sucesso!";
    }
}
