<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Usuario extends REST_Controller {
    
    public function __construct(){
        parent:: __construct();
        $this->load->model('Usuarioapi_model');
    }
    
    public function index_get(){
        $info = $this->Usuarioapi_model->get();
        
        if(!is_null($info)){
            $this->response(array('response' => $info), 200);
        } else {
            $this->response(array('error' => 'No hay promociones'), 404);
        }
    }
    
    public function info_get($id){
        
        if(!$id){
           
            $this->response(null, 400);
            
        }
        
        $info = $this->Usuarioapi_model->get($id);
        
        if(!is_null($info)){
            $this->response(array('response' => $info), 200);
        } else {
            $this->response(array('error' => 'No hay promociones'), 404);
        }
    }
    
}   