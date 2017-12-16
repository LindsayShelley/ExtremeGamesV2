<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Index extends REST_Controller {
    
    public function __construct(){
        parent:: __construct();
        $this->load->model('Indexapi_model');
    }
    
    public function index_get(){
        $index = $this->Indexapi_model->get();
        
        if(!is_null($index)){
            $this->response(array('response' => $index), 200);
        } else {
            $this->response(array('error' => 'No hay promociones'), 404);
        }
    }
    
    public function find_get($id){
        
        if(!$id){
           
            $this->response(null, 400);
            
        }
        
        $Index = $this->Indexapi_model->get($id);
        
        if(!is_null($Index)){
            $this->response(array('response' => $Index), 200);
        } else {
            $this->response(array('error' => 'No hay promociones'), 404);
        }
    }
    
}