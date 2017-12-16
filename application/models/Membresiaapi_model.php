<?php

class Membresiaapi_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
        
    public function get($id = null) {
        
        if(!is_null($id)){
            $query = $this->db->select('*')->from('eg_membresia')->where('id', $id)->get();
            
            if ($query->num_rows() === 1){
            return $query->row_array();
            
            }
            
            return false;
            
        }
      
      $query = $this->db->select('*')->from('eg_membresia')->get();
      
      if($query->num_rows() > 0){
          return $query->result_array();
      }
      
      return false;
      
    }
    
}
