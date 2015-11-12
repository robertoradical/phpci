<?php

class Usuario{
    public $nome, $pass;
    
    public function __construct($nome, $pass){
        $this->nome = $nome;
        $this->pass = $pass;
    }
}