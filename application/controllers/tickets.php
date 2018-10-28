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
		//$this->form_validation->set_rules('fecha_limite', 'txtParaCuando', 'required|trim');
		
		if($this->form_validation->run())
		{
			$datos = array();
			
			$datos["quien"] =set_value("txtQuienSolicita");
			$datos["titulo"] =set_value("txtTitulo");
			$datos["descripcion"] =set_value("txtDescripcion");
			$datos["sector"] =set_value("txtSector");
			$datos["prioridad"] =set_value("txtPrioridad");
			$datos["fecha_limite"] =set_value("fecha_limite");
			
			$letras = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q");
			$cod=substr($datos["sector"], 0, 2).$letras[rand (0,9)].date("mdy");
			
			$datos["codigo"]=$cod;
			
			if ($this->session->userdata("email"))
			{
				$datos["creador"] =$this->session->userdata("usuario_id");
				//$mail=$this->session->userdata("email");
				$mail="open24ml@gmail.com";
			}
			else
			{
				$datos["creador"] =2;
				$mail="open24ml@gmail.com";
			}
				
				
			$this->ticket_model->alta($datos);
			
			//cargamos la libreria email de ci
			$this->load->library("email");
	
			//configuracion para gmail
			$configGmail = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'soportamehilet@gmail.com',
				'smtp_pass' => 'SopHilet123',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n");    

			//cargamos la configuración para enviar con gmail
			$this->email->initialize($configGmail);
	
			$this->email->from('TecnoHilet');
			$this->email->reply_to("soportamehilet@gmail.com");
			$this->email->to($mail);
			$this->email->subject('Nuevo Ticket');
			//$this->email->message($datos["descripcion"]);
			$this->email->message('Descripcion <p>'.$datos["descripcion"].'<p> CODIGO '.$cod);
			$this->email->send();
			
			redirect('tickets');
		}
		else
		{
			redirect('tickets/ERROR');	
		}	
	}
	
	public function Modificar($ticket_id = ""){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('txtQuienSolicita', 'txtQuienSolicita', 'required|trim');
		$this->form_validation->set_rules('txtTitulo', 'txtTitulo', 'required|trim');
		$this->form_validation->set_rules('txtDescripcion', 'txtDescripcion', 'required|trim');
		$this->form_validation->set_rules('txtSector', 'txtSector', 'required|trim');
		$this->form_validation->set_rules('txtPrioridad', 'txtPrioridad', 'required|trim');
		$this->form_validation->set_rules('fecha_limite', 'txtParaCuando', 'required|trim');
		
		if($this->form_validation->run()){
		
		$datos = array();
		$datos["quien"] =set_value("txtQuienSolicita");
		$datos["titulo"] =set_value("txtTitulo");
		$datos["descripcion"] =set_value("txtDescripcion");
		$datos["sector"] =set_value("txtSector");
		$datos["prioridad"] =set_value("txtPrioridad");
		$datos["fecha_limite"] =set_value("fecha_limite");
		$datos["creador"] =$this->session->userdata("usuario_id");
			
		$this->ticket_model->modificacion($ticket_id,$datos);
		
			redirect('tickets');
		}else{
			redirect('tickets/ERROR');	
		}	
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
	
	public function TraerTicket($ticket_id = "")
	{
		$rol = $this->session->userdata("rol");
		
		if($rol == 'A')
		{
			$this->datos["ticket"] = $this->ticket_model->obtener_por_id($ticket_id);
		
			$this->load->view('modificarTicket', $this->datos);
		}
		else
		{
			Redirect('usuarios/index/PROHIBIDO');
		}
	}
	public function TraerTicketPorCodigo($codigo="")
	{
		$ticket=array();
		$ticket=$this->ticket_model->obtener_por_codigo($codigo);

		$this->load->view('buscarTicket',$this->ticket);

	}
}