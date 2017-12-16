<?php



class News_model extends CI_Model {

 public function __construct() {
        parent::__construct();
        
    }

    public function get_eg_catalago()
    {
        
        
        $consulta = $this->db->query('SELECT * FROM eg_catalago');
        return $consulta->result();
    }

    
    
public function get_news($id) {
  if($id != FALSE) {
    $query = $this->db->get_where('eg_catalago', array('id' => $id));
    return $query->row_array();
  }
  else {
    return FALSE;
  }
}

}
