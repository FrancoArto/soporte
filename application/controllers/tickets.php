<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tickets extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ticket_model');
	}
	
	public function index()
	{
		
		if ($this->session->userdata("email"))
			redirect('usuarios/index');
		else
			$this->load->view('principal');
	}
	
	public function Agregar(){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('txtQuienSolicita', 'txtQuienSolicita', 'required|trim');
		$this->form_validation->set_rules('txtTitulo', 'txtTitulo', 'required|trim');
		$this->form_validation->set_rules('txtDescripcion', 'txtDescripcion', 'required|trim');
		$this->form_validation->set_rules('txtSector', 'txtSector', 'required|trim');
		$this->form_validation->set_rules('txtPrioridad', 'txtPrioridad', 'required|trim');
		$this->form_validation->set_rules('fecha_limite', 'txtParaCuando', 'required|trim');
		
		$this->form_validation->run();
		
		$datos = array();
		
		$datos["quien"] =set_value("txtQuienSolicita");
		$datos["titulo"] =set_value("txtTitulo");
		$datos["descripcion"] =set_value("txtDescripcion");
		$datos["sector"] =set_value("txtSector");
		$datos["prioridad"] =set_value("txtPrioridad");
		$datos["fecha_limite"] =set_value("fecha_limite");
		if ($this->session->userdata("email"))
			$datos["creador"] =$this->session->userdata("usuario_id");
		else
			$datos["creador"] =2;
			
		$this->ticket_model->alta($datos);
		
		redirect('tickets');	
	}
	
	public function Modificar(){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('txtQuienSolicita', 'txtQuienSolicita', 'required|trim');
		$this->form_validation->set_rules('txtTitulo', 'txtTitulo', 'required|trim');
		$this->form_validation->set_rules('txtDescripcion', 'txtDescripcion', 'required|trim');
		$this->form_validation->set_rules('txtSector', 'txtSector', 'required|trim');
		$this->form_validation->set_rules('txtPrioridad', 'txtPrioridad', 'required|trim');
		$this->form_validation->set_rules('fecha_limite', 'txtParaCuando', 'required|trim');
		
		$this->form_validation->run();
		
		$datos = array();
		
		$datos["quien"] =set_value("txtQuienSolicita");
		$datos["titulo"] =set_value("txtTitulo");
		$datos["descripcion"] =set_value("txtDescripcion");
		$datos["sector"] =set_value("txtSector");
		$datos["prioridad"] =set_value("txtPrioridad");
		$datos["fecha_limite"] =set_value("fecha_limite");
		$datos["creador"] =$this->session->userdata("usuario_id");
			
		$this->ticket_model->modificacion($datos);
		
		redirect('tickets');	
	}
	
	public function listar(){
		$rol = $this->session->userdata("rol");
		$usuario_id = $this->session->userdata("usuario_id");
		if($rol == 'A')
		{
			$this->datos["lista"] = $this->ticket_model->listado();
			
			$this->load->view('listaTickets', $this->datos);
		}
		else
		{
			if ($rol == 'U'){
				$this->datos["lista"] = $this->ticket_model->listado("estado","ASC",$usuario_id);
				
				$this->load->view('listaTickets', $this->datos);
			}else{
				redirect('#');
			}	
		}	
	}
	
	public function baja($usuario_id = ""){
		
		if($usuario_id!=""){
			$this->ticket_model->baja($usuario_id);
		}
		
		redirect("tickets/listar");
	}
}