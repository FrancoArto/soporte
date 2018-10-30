<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	protected $datos = array();
	function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model');
	}
	
	public function index($op = "")
	{
		if($sesion = $this->session->userdata("usuario_id"))
		{
			$this->datos["op"] = $op;
			$this->load->view('usuario', $this->datos);
		}
	}

	public function Registro($op = ""){
		$rol = $this->session->userdata("rol");
		
		if($rol == 'A')
		{
			$this->datos["op"] = $op;
			$this->load->view('registro', $this->datos);
		}
		else
		{
			redirect('welcome/index/PROHIBIDO');	
		}
	}
	
	public function Agregar(){	
		
		
		
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|trim');
		$this->form_validation->set_rules('pass', 'Pass', 'required|trim');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
		$this->form_validation->set_rules('sector', 'Sector', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('rol', 'Rol', 'required|trim');
		
		if($this->form_validation->run()){
			
			$datos = array();
			
			$datos["usuario"] =set_value("usuario");
			$datos["password"] =set_value("pass");
			$datos["nombre"] =set_value("nombre");
			$datos["sector"] =set_value("sector");
			$datos["email"] =set_value("email");
			$datos["rol"] = set_value("rol");
				
			$this->usuarios_model->alta($datos);
			redirect('usuarios/registro/OK');
		}
		else
		{
			redirect('usuarios/registro/ERRORCAMPOS');
		}
				
	}
	
	public function Login()
	{
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('txtEmail', 'Email', 'required|trim');
		$this->form_validation->set_rules('txtPassword', 'Pass', 'required|trim');
		
		if(!$this->form_validation->run())
		{
			redirect('welcome/index/CAMPOSINCOMPLETOS');
		}
		
		$login = array();
		
		$login["email"] = set_value("txtEmail");
		$login["password"] = set_value("txtPassword");
		
		$datos = array();
		
		
		if($datos = $this->usuarios_model->obtener_por_email($login["email"]))
			{
				if($datos["password"] == $login["password"])
				{
					if($datos["estado"] == 1)
					{
						$this->session->set_userdata($datos);
						
						
						$this->usuarios_model->modificacion($datos["usuario_id"], $datos, true);
						
						redirect('usuarios/index');				
					}
					else
					{
						redirect('welcome/index/INACTIVO');
					}
				}
				else
				{
					redirect('welcome/index/ERRORCRED');
				}
			}
			else
			{
				redirect('welcome/index/ERRORCRED');
			}
	}
	
	
	public function Logout(){
		
		$this->session->sess_destroy();
				
		redirect('');
	}
	
	public function listar($op = ""){
		$rol = $this->session->userdata("rol");
		$this->datos["op"] = $op;
		if($rol == 'A')
		{
			$this->datos["lista"] = $this->usuarios_model->listado();
			$this->load->view('listaUsuarios', $this->datos);
		}
		else
		{
			redirect('welcome/index/PROHIBIDO');	
		}
		
		
	}
	
	public function baja($usuario_id = ""){
		
		if($usuario_id!=""){
			$this->usuarios_model->baja($usuario_id);
		}
		
		redirect("usuarios/listar");
	}
	
	public function activar($usuario_id = ""){
		
		if($usuario_id!=""){
			$this->usuarios_model->activar($usuario_id);
		}
		
		redirect("usuarios/listar");
	}
	
	public function TraerUsuario($usuario_id = ""){
		$rol = $this->session->userdata("rol");
		
		if($rol == 'A')
		{
			$this->datos["usuario"] = $this->usuarios_model->obtener_por_id($usuario_id);
		
			$this->load->view('modificar', $this->datos);
		}
		else
		{
			Redirect('welcome/index/PROHIBIDO');
		}
		
		
		}
		
	public function modificar($usuario_id = ""){
		
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|trim');
		$this->form_validation->set_rules('pass', 'Pass', 'required|trim');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
		$this->form_validation->set_rules('sector', 'Sector', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('rol', 'Rol', 'required|trim');

		if($this->form_validation->run()){
			$datos = array();
			$datos["usuario"] = set_value("usuario");
			$datos["password"] = set_value("pass");
			$datos["nombre"] =set_value("nombre");
			$datos["sector"] =set_value("sector");
			$datos["email"] =set_value("email");
			$datos["rol"] = set_value("rol");
			
			$this->usuarios_model->modificacion($usuario_id, $datos);
			
			redirect('usuarios/listar/OK');
		}else{
			redirect('usuarios/listar/ERROR');	
		}
	}
}