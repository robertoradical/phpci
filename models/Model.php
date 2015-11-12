<?php

class Model extends CI_Model {
	public function insert(Usuario $usu){
		$this->db->insert('User',$usu);
	}
	
	public function getUser($nome,$pass){
		$this->db->where('nome',$nome);
		$this->db->where('pass',$pass);
		$a = $this->db->get('User');
		if ($a->num_rows()>0){
			if($a->row()->nome === "root"){
				return "admin";
			}else{
				return "comum";
			}
		}else{
			return false;
		}
	}
	
	public function searchAll(){
	    $query = $this->db->query("Select * from User");
        return $query->result();
	}
	
}