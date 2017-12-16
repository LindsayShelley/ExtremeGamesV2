<?php

class Indexapi_model extends CI_Model {
    
    public function __construct(){
        Parent::__construct();
    }
    
    public function get($id = null) {
        
        if(!is_null($id)){
            $query = $this->db->select('usuario')->from('eg_users')->where('id', $id)->get();
            
            if ($query->num_rows() === 1){
            return $query->row_array();
            
            }
            
            return false;
            
        }
      
      $query = $this->db->select('*')->from('eg_users')->get();
      
      if($query->num_rows() > 0){
          return $query->result_array();
      }
      
      return false;
      
    }
}
