<?php
    abstract class Produto{
        public $nome, $preco;
        
        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;
        }
        
        abstract public function getCatId();
    }
    
    class Livro extends Produto{
        public function getCatId(){
            return 1;
        }
    }
    
    class Filme extends Produto{
        public function getCatId(){
            return 2;
        }
    }
    
    //Fabriquinha basica
    //Fabricas genericas -> sem que vem.
    class Fabrica{
        public function createProd($cat, $nome, $preco ){
            if($cat === "Livro"){
                return new Livro($nome,$preco);
            }  
            if($cat === "Filme"){
                return new Filme($nome,$preco);
            }
        }
    }