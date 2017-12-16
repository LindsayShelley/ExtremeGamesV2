<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class Suscriptor extends CI_Controller {
 
 public function __construct() {
 parent::__construct();
 $this->load->library(array('session'));
 $this->load->helper(array('url'));
 }
 
 public function index()
 {
 if($this->session->userdata('nu_rol') == FALSE)
 {
 redirect(base_url().'login');
 }
 $data['titulo'] = 'Bienvenido a la web '.$this->session->userdata('nu_rol' != '3');
 $this->load->view('suscriptor_view',$data);
 }
}

