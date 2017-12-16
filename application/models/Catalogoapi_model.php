<?php

class Catalogoapi_model extends CI_Model {
    
    public function __construct(){
        Parent::__construct();
    }
    
    public function get($id = null) {
        
        if(!is_null($id)){
            $query = $this->db->select('*')->from('eg_catalago')->where('nu_consola', $id)->get();
            
            if ($query->num_rows() > 0){
            return $query->result_array();
            
            }
            
            return false;
            
        }
      
      $query = $this->db->select('*')->from('eg_catalago')->get();
      
      if($query->num_rows() > 0){
          return $query->result_array();
      }
      
      return false;
      
    }
}
