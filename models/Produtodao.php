<?php

    class ProdutoDAO extends CI_Model{
        public function insert(Produto $prod){
		    $this->db->insert('Produto',$prod);
	    }
    }