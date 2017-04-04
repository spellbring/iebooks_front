<?php

class Cuento extends CI_Controller{
    public function __construct() {
        parent::__construct();
          if (!$this->session->userdata('sess_authenticado')) {
            redirect(base_url('login'));
            exit();
        }
    }
    
    public function index(){
        $this->load->library('encrypt');
        
        $_datos = array();
       
        $_datos['plantilla']['vista'] = 'cuento';
        
        $this->load->view('plantillas/cuento', $_datos);
    }
    
    public function cuento($id){
        $this->load->library('encrypt');
        $_datos = array();
        
        $this->load->view('back_end/cuento', $_datos);
    }
    
}
