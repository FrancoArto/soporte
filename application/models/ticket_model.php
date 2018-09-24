<?php
class Ticket_model extends CI_Model {
	
	function alta($datos = array())
	{
		$this->db->set("quien",$datos["quien"]);
		$this->db->set("titulo",$datos["titulo"]);
		$this->db->set("descripcion",$datos["descripcion"]);
		$this->db->set("sector",$datos["sector"]);
		$this->db->set("prioridad",$datos["prioridad"]);
		//$this->db->set("fecha_limite",$datos["fecha_limite"]);
		$this->db->set("creador",$datos["creador"]);
		
		$this->db->insert("tickets", $datos);
	}
	
	function baja($ticket_id = "")
	{
		$this->db->where("ticket_id", $ticket_id);
		$this->db->limit(1);
		$this->db->delete("Tickets");
		
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function modificacion($usuario_id = "", $datos = array())
	{
		foreach($datos as $nombre=>$valor)
		{
			$this->db->set($nombre, $valor);
		}
		
		$this->db->where("ticket_id", $usuario_id);
		
		$this->db->update("Tickets");
		
	    //forma de confirmar si el update se realizo
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function listado($orden = "fecha_inicio", $sentido = "ASC")
	{
		$this->db->order_by($orden,$sentido);
		
		$datos = $this->db->get("Tickets");
		
		//forma de obtener de los datos 
		if($datos->num_rows())
		{
			return $datos->result_array();	
		}else{
			return array();
		}
	}
	
	function obtener_por_id($ticket_id = "")
	{
		$this->db->where("ticket_id", $ticket_id);
		
		$this->db->limit(1);
		
		$datos = $this->db->get("Tickets");
		
		//forma de obtener el dato 
		if($datos->num_rows())
		{
			return $datos->row_array();	
		}else{
			return false;
		}
	}
}
?>