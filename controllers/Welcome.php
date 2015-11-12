<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function teste(){
		$this->load->view('form');
	}
	
	public function doPost(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Usuario($_POST["nome"]));
	}
	
	public function oe(){
		$this->load->model('model');
		$m = $this->model;
		echo $m->getUser("lol");
	}
	
	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$usuarios = $m->searchAll();
		$data['usuarios'] = $usuarios;
		$data['outravar'] = 5;
		$this->load->view("lista",$data);
	}
}
