<?php

class Cliente {
    public  $logradouro;
    public  $bairro;
    
    public function varEndereco() : string {
        return "<p>Endereço: {$this->logradouro}<br>Bairro: {$this->bairro}</p>";
       
    }
}
