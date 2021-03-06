<?php
class Ticket_model extends CI_Model {
	
	function alta($datos = array())
	{
		$this->db->set("quien",$datos["quien"]);
		$this->db->set("titulo",$datos["titulo"]);
		$this->db->set("descripcion",$datos["descripcion"]);
		$this->db->set("sector",$datos["sector"]);
		$this->db->set("prioridad",$datos["prioridad"]);
		$this->db->set("fecha_limite",$datos["fecha_limite"]);
		$this->db->set("creador",$datos["creador"]);
		$this->db->set("codigo",$datos["codigo"]);
		
		$this->db->insert("tickets", $datos);

		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
	
	function baja($ticket_id = "")
	{
		$this->db->where("ticket_id", $ticket_id);
		$this->db->limit(1);
		$this->db->delete("tickets");
		
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function modificacion($ticket_id = "", $datos = array())
	{
		foreach($datos as $nombre=>$valor)
		{
			$this->db->set($nombre, $valor);
		}
		
		$this->db->where("ticket_id", $ticket_id);
		
		$this->db->update("tickets");
		
	    //forma de confirmar si el update se realizo
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function listado($orden = "estado", $sentido = "ASC", $usuario_id = "")
	{
		$this->db->select("tickets.*, usuarios.usuario, estados.nombre as estado_nombre, prioridades.nombre as prioridad_nombre");
		$this->db->join('usuarios', 'tickets.creador = usuarios.usuario_id', "inner");
		$this->db->join('estados', 'tickets.estado = estados.estado_id', "inner");
		$this->db->join('prioridades', 'tickets.prioridad = prioridades.prioridad_id', "inner");		
		
		if ($usuario_id != ""){
			$this->db->where("creador", $usuario_id);
		}
		$this->db->order_by($orden,$sentido);
		$datos = $this->db->get("tickets");

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
		$this->db->select("tickets.*, prioridades.nombre as prioridad_nombre");
		$this->db->join('prioridades', 'tickets.prioridad = prioridades.prioridad_id', "inner");
		$this->db->where("ticket_id", $ticket_id);
		
		$this->db->limit(1);
		
		$datos = $this->db->get("tickets");
		
		//forma de obtener el dato 
		if($datos->num_rows())
		{
			return $datos->row_array();	
		}else{
			return false;
		}
	}
	function obtener_por_codigo($codigo = "")
	{
		$this->db->select("tickets.*, estados.nombre as estado_nombre, prioridades.nombre as prioridad_nombre");
		$this->db->join('estados', 'tickets.estado = estados.estado_id', "inner");
		$this->db->join('prioridades', 'tickets.prioridad = prioridades.prioridad_id', "inner");
		$this->db->where("codigo", $codigo);
		
		$this->db->limit(1);
		
		$datos = $this->db->get("tickets");
		
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