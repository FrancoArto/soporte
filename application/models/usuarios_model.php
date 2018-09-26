<?php
class Usuarios_model extends CI_Model {
	
	function alta($datos = array())
	{
		$this->db->set("usuario",$datos["usuario"]);
		//$this->db->set("usuario",'pepe');
		$this->db->set("password",$datos["password"]);
		$this->db->set("nombre",$datos["nombre"]);
		$this->db->set("sector",$datos["sector"]);
		$this->db->set("email",$datos["email"]);
		
		$this->db->insert("usuarios", $datos);
		
		//forma de confirmar que el insert se realizo
		/*if($cod = $this->db->insert_id)
		{
			return $cod;
		}else{
			return false;
		}	*/
	}
	
	function baja($usuario_id = "", $estado = 0)
	{
		$this->db->where("usuario_id", $usuario_id);
		$this->db->limit(1);
		$this->db->set("estado", $estado);
		$this->db->update("usuarios");
		
		//forma de confirmar si el delet se realizo
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function activar($usuario_id = "", $estado = 1)
	{
		$this->db->where("usuario_id", $usuario_id);
		$this->db->limit(1);
		$this->db->set("estado", $estado);
		$this->db->update("usuarios");
		
		//forma de confirmar si el delet se realizo
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function modificacion($usuario_id = "", $datos = array(), $updatelogin = false)
	{
		foreach($datos as $nombre=>$valor)
		{
			$this->db->set($nombre, $valor);
		}
		
		if($updatelogin)
		{
			$this->db->set("ult_login", "now()", false);
		}
		
		$this->db->where("usuario_id", $usuario_id);
		
		$this->db->update("usuarios");
		
	    //forma de confirmar si el update se realizo
		if($this->db->affected_rows())
		{
			return true;
		}else{
			return false;
		}
	}
	
	function listado($orden = "usuario", $sentido = "ASC", $estado=1)
	{
		//$this->db->where("estado", $estado);
		$this->db->order_by($orden,$sentido);
		
		$datos = $this->db->get("usuarios");
		
		//forma de obtener de los datos 
		if($datos->num_rows())
		{
			return $datos->result_array();	
		}else{
			return array();
		}
	}
	
	function obtener_por_id($usuario_id = "")
	{
		$this->db->where("usuario_id", $usuario_id);
		
		$this->db->limit(1);
		
		$datos = $this->db->get("usuarios");
		
		//forma de obtener el dato 
		if($datos->num_rows())
		{
			return $datos->row_array();	
		}else{
			return false;
		}
	}
	
	function obtener_por_email($email = "")
	{
		$this->db->where("email", $email);
		
		$this->db->limit(1);
		
		$datos = $this->db->get("usuarios");
		
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