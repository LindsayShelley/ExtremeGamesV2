<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalago extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('catalago_model');
    $this->load->database();
        $this->load->helper('url');
         $this->load->library('form_validation');
    }


    public function index()
	{
            $data = array(

                        'eg_catalago' => $this->catalago_model->get_eg_catalago()
            );

        $this->load->view('catalago',$data);
	}
}
