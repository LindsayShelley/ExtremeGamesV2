<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membresia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('membresia_model');
        $this->load->database();
        $this->load->helper('url');
         $this->load->library('form_validation');
    }

    public function index()
{
        $data['Titulo'] = 'Update con codeIgniter';
      
        $data['eg_users'] = $this->membresia_model->get_eg_users();
$data['eg_membresia'] = $this->membresia_model->get_eg_membresia(); 

$this->load->view('membresia', $data);
        
        
        
           
        
        }
        
        
        
        
        public function edit_eg_membresia($id)
{
            
    if($this->input->post('submit'))
    {
        $this->load->view('membresia',$data);
        $this->membresia_model->add_eg_membresia();
        redirect(base_url().'membresia',$data);
    }
}

}