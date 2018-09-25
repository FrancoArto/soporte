<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	protected $datos = array();
	function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model');
	}
	
	public function index()
	{
		$this->load->view('registro');
	}
	
	public function Agregar(){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|trim');
		$this->form_validation->set_rules('pass', 'Pass', 'required|trim');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
		$this->form_validation->set_rules('sector', 'Sector', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		
		$this->form_validation->run();
		
		$datos = array();
		
		$datos["usuario"] =set_value("usuario");
		$datos["password"] =set_value("pass");
		$datos["nombre"] =set_value("nombre");
		$datos["sector"] =set_value("sector");
		$datos["email"] =set_value("email");
			
		$this->usuarios_model->alta($datos);
		
		redirect('usuarios/index/OK');	
	}
	
	public function Login()
	{
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('txtEmail', 'Email', 'required|trim');
		$this->form_validation->set_rules('txtPassword', 'Pass', 'required|trim');
		
		$this->form_validation->run();
		
		$login = array();
		
		$login["email"] = set_value("txtEmail");
		$login["password"] = set_value("txtPassword");
		
		$datos = array();
		
		if($datos = $this->usuarios_model->obtener_por_email($login["email"]))
		{
			if($datos["password"] == $login["password"])
			{
				$this->session->set_userdata($datos);
				
				
				$this->usuarios_model->modificacion($datos["usuario_id"], $datos, true);
				
				if($datos["rol"] == 'A')
				{
					$this->load->view('usuarioA');
				}
				else
				{
					$this->load->view('usuarioU');
				}				
			}
			else
			{
				redirect('/ERROR');
			}
		}
		else
		{
			redirect('/ERROR1');
		}
	}
	
	public function Logout(){
		
		$sesion = $this->session->userdata("usuario_id");
		$this->session->unset_userdata($sesion);
		
		redirect('');
	}
	
	public function listar(){
		
		$this->datos["lista"] = $this->usuarios_model->listado();
		$this->load->view('listaUsuarios', $this->datos);
	}
	
	public function baja($usuario_id = ""){
		
		if($usuario_id!=""){
			$this->usuarios_model->baja($usuario_id);
		}
		
		redirect("usuarios/listar");
	}
}