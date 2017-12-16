<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}

	public function index()
	{
		if($this->session->userdata('nu_rol') == FALSE || $this->session->userdata('nu_rol') != '3')
		{
			redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('nombre');
		$this->load->view('cliente_view',$data);
	}
}
