<?php
class Estados_model extends CI_Model {
  protected $datos = array();

	function listar() {

    $this->db->order_by("estado_id", "ASC");
    $datos = $this->db->get('estados');

    if($datos->num_rows())
		{
			return $datos->result_array();	
		}else{
			return array();
		}
  }	
}
?>