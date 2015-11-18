<?php

    class Loja extends CI_Controller{
    	
    	public function forma(){
    		$this->load->view('prod');
    	}
    	
        public function doPost(){
		    require_once APPPATH."models/produto.php";
		    $this->load->model('produtodao');
		    $m = $this->produtodao;
		    $nome = $_POST["nome"];
		    $preco = $_POST["preco"];
		    $categoria = $_POST["cat"];
		    $f = new Fabrica();
		    $prod = $f->createProd($categoria, $nome, $preco);
		    $prod->tipoid = $prod->getCatId();
		    $m->insert($prod);
	    }
    }