<?php

class  Empleado extends CI_Controller{
  public function _construct(){
    parent::costruct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->library(array('session', 'grocery_CRUD'));
  }
  public function index(){
    if($this->session->userdata('nu_rol') == FALSE || $this->session->userdata('nu_rol') != '2')
    {
      redirect(base_url().'login');
    }
    $output=(object) array ('output' => '', 'js_files' => array(), 'css_files'=> array());
    $this->cargar_vistas($output);
  }

  function cargar_vistas($output=null){
    $this->load->view('empleado.php', $output);
  }

  public function eg_consolas()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_consolas');
      $crud->columns('nombre');
      $crud->set_language("spanish");
      $crud->set_subject('Consolas');



      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  public function eg_catalago()
  {
    try{
      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('eg_catalago');
			$crud->set_relation('nu_consola','eg_consolas','nombre');
			$crud->display_as('nu_consola','Consolas');
			$crud->set_subject('Videojuego');
      $crud->set_language("spanish");


			$crud->required_fields('nombre');

			$crud->set_field_upload('imagen','assets/uploads/images_catalago');

			$output = $crud->render();

			$this->cargar_vistas($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
  }

  public function eg_horas()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_horas');
      $crud->columns('tiempo');
      $crud->set_language("spanish");
      $crud->set_subject('Horas');



      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  public function eg_membresia()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_membresia');
      $crud->set_relation('nu_user','eg_users','{nombre} - {paterno}');
      $crud->set_relation('nu_saldo','eg_saldos','saldo');
      $crud->set_relation('nu_puntos','eg_puntos','puntos');
      $crud->display_as('nu_user','Nombre');
      $crud->display_as('nu_saldo','Saldo');
      $crud->display_as('nu_puntos','Puntos');
      $crud->display_as('nu_extra','Horas Extra');
      $crud->set_subject('Membresia');
      $crud->set_language("spanish");


      $crud->required_fields('nu_user');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  public function eg_promociones()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_promociones');
      $crud->set_subject('Promocion');
      $crud->set_language("spanish");

      $crud->required_fields('nombre');

      $crud->set_field_upload('imagen','assets/uploads/images_promociones');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  public function eg_puntos()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_puntos');
      $crud->columns('puntos');
      $crud->set_language("spanish");
      $crud->set_subject('Puntos');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  public function eg_puntos_horas()
  {
    try{
      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('eg_puntos_horas');
			$crud->set_relation('nu_puntos','eg_puntos','puntos');
      $crud->set_relation('nu_tiempo','eg_horas','tiempo');
			$crud->display_as('nu_puntos','Puntos');
      $crud->display_as('nu_tiempo','Tiempo');
			$crud->set_subject('Puntos x Horas');
      $crud->set_language("spanish");


			$crud->required_fields('nu_puntos');
      $crud->required_fields('nu_tiempo');
			$output = $crud->render();

			$this->cargar_vistas($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

  }


  public function eg_saldos()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_saldos');
      $crud->columns('saldo');
      $crud->set_language("spanish");
      $crud->set_subject('Saldo');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  function encrypt_password($post_array, $primary_key = null)
      {

  	    $this->load->helper('security');
  	    $post_array['contraseña'] = do_hash($post_array['contraseña'], 'sha1');
  	    return $post_array;

      }

  public function eg_users()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->where('nu_rol', '3');

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_users');
      $crud->unset_fields('nu_rol');
      $crud->set_subject('Cliente');
      $crud->set_language("spanish");
      $crud->set_relation('nu_rol','eg_roles','nombre');
      $crud->display_as('nu_rol','Tipo de usuario');
      $crud->change_field_type('contraseña','password');
      $crud->callback_before_insert(array($this,'encrypt_password'));

      $crud->required_fields('nombre');
      $crud->required_fields('paterno');
      $crud->required_fields('materno');
      $crud->required_fields('usario');
      $crud->required_fields('rol');

      $crud->set_field_upload('imagen','assets/uploads/images_usuarios');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }



}
