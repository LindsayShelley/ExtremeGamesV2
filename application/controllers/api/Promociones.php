<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Promociones extends REST_Controller {
    
    public function __construct(){
        parent:: __construct();
        $this->load->model('Promocionesapi_model');
    }
    
    public function index_get(){
        $promociones = $this->Promocionesapi_model->get();
        
        if(!is_null($promociones)){
            $this->response(array('response' => $promociones), 200);
        } else {
            $this->response(array('error' => 'No hay promociones'), 404);
        }
    }
    
    public function find_get($id){
        
        if(!$id){
           
            $this->response(null, 400);
            
        }
        
        $promociones = $this->Promocionesapi_model->get($id);
        
        if(!is_null($promociones)){
            $this->response(array('response' => $promociones), 200);
        } else {
            $this->response(array('error' => 'No hay promociones'), 404);
        }
    }
    
}   