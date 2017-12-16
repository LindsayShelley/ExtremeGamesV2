<?php

class Promocionesapi_model extends CI_Model {
    
    public function __construct(){
        Parent::__construct();
    }
    
    public function get($id = null) {
        
        if(!is_null($id)){
            $query = $this->db->select('*')->from('eg_promociones')->where('id', $id)->get();
            
            if ($query->num_rows() === 1){
            return $query->row_array();
            
            }
            
            return false;
            
        }
      
      $query = $this->db->select('*')->from('eg_promociones')->get();
      
      if($query->num_rows() > 0){
          return $query->result_array();
      }
      
      return false;
    }
}
