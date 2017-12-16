<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
    $this->load->database();
        $this->load->helper('url');
         $this->load->library('form_validation');
    }
    
    
    

        
        
        
    
public function view($id) {
    $data = array(
                
                        'eg_catalago' => $this->news_model->get_eg_catalago()
            );
    $this->load->model('news_model');
    $news = $this->news_model->get_news($id);
    $data['nombre'] = $news['nombre'];
    $data['descripcion'] = $news['descripcion'];
    $data['imagen'] = $news['imagen'];
    $data['nu_consola'] = $news['nu_consola'];
    $data['video'] = $news['video'];
    $this->load->view('news_article', $data);
}
}
