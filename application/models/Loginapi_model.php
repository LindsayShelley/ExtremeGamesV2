<?php

class Loginapi_model extends CI_Model {
    
    public function __construct() {
        Parent::__construct();
    $this->load->database();
    }
    
    public function login($usuario, $password) {
                $this->db->where('usuario',$usuario);
		$query = $this->db->get('eg_users');
        if ($query->num_rows() == 1) {
            $result = $query->result();
            return $result[0]->id;
        }
        return false;
    }
}