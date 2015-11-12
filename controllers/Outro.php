<?php
class Outro extends CI_Controller {
    public function ola(){
        $this->load->view("index2");
    }   
    
    public function teste(){
        echo $this->session->userdata("_ID");
    }
    
    public function sess(){
        $this->session->set_userdata("_ID","123");
        echo "Session setada com sucesso";
    }
}