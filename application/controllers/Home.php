<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('sess_authenticado')) {
            redirect(base_url('login'));
            exit();
        }
//        $this->load->model('descuento_model');
//        $this->load->model('tarjeta_model');
//        $this->load->model('solicitud_model');
//        $this->load->library('calendar');
    }

    public function index()
    {
        $this->load->model('clases_model');
        
        $_datos = array();
        $_datos['plantilla']['css'] = array(
            'styles/climacons-font',
            'vendor/rickshaw/rickshaw.min'
        );
        
        $_datos['plantilla']['js'] = array(
            'vendor/d3/d3.min',
            'vendor/rickshaw/rickshaw.min',
            'vendor/flot/jquery.flot',
            'vendor/flot/jquery.flot.resize',
            'vendor/flot/jquery.flot.categories',
            'vendor/flot/jquery.flot.pie',
            'scripts/pages/dashboard'
        );
        

        //End: Objetos
        $_datos['objClases'] = $this->clases_model->getClasesIns($this->session->userdata('sess_perfil_inst'));
        
        $_datos['objMaterial'] = $this->clases_model;

        $_datos['plantilla']['vista'] = 'index';
        $this->load->view('plantillas/plantilla_back', $_datos);
    }
    
    public function abrir_clase(){
        $this->load->library('encrypt');
        $this->load->model('clases_model');
        $_datos = array();
       
        if ($this->input->is_ajax_request()) {
             if ($this->input->post('__MA__')) {
              $id = base64_decode($this->security->xss_clean(strip_tags($this->input->post('__MA__'))));   
              $_datos['obj_clase_material'] = $this->clases_model->get_clase_material($id);         
              $this->load->view('back_end/modal_popup/modal_cuento', $_datos);
             }
            
        }
    }

}
