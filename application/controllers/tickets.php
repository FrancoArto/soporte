<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tickets extends CI_Controller {

	protected $datos = array();
	function __construct()
	{
		parent::__construct();
		$this->load->model('ticket_model');
		$this->load->model('usuarios_model');
		$this->load->model('estados_model');
	}
	
	public function index()
	{
		
		if ($this->session->userdata("email"))
			redirect('usuarios/index');
		else
			redirect('welcome/index');
	}
	
	public function Agregar(){
		$this->load->library("form_validation");
		
		if ($this->session->userdata("rol") != 'U') { 
			$this->form_validation->set_rules('txtQuienSolicita', 'txtQuienSolicita', 'required|trim');
			$this->form_validation->set_rules('txtSector', 'txtSector', 'required|trim');
		}
		
		$this->form_validation->set_rules('txtTitulo', 'txtTitulo', 'required|trim');
		$this->form_validation->set_rules('txtDescripcion', 'txtDescripcion', 'required|trim');		
		$this->form_validation->set_rules('txtPrioridad', 'txtPrioridad', 'required|trim');
		$this->form_validation->set_rules('txtParaCuando', 'txtParaCuando', 'required|trim');
		
		if ($this->form_validation->run()){
			
			$datos = array();
			
			if ($this->session->userdata("rol") != 'U') {
				$datos["quien"] = set_value("txtQuienSolicita");
				$datos["sector"] = set_value("txtSector");
			}
			else {
				$datos["quien"] = $this->session->userdata("nombre");
				$datos["sector"] = $this->session->userdata("sector");
			}

			
			$datos["titulo"] =set_value("txtTitulo");
			$datos["descripcion"] =set_value("txtDescripcion");
			
			$datos["prioridad"] =set_value("txtPrioridad");
			$datos["fecha_limite"] =set_value("txtParaCuando");
			if ($this->session->userdata("email"))
				$datos["creador"] =$this->session->userdata("usuario_id");
			else
				$datos["creador"] =2;
			
			$letras = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q");
			$cod=substr($datos["sector"], 0, 2).$letras[rand (0,9)].date("mdy");
			
			$datos["codigo"]=$cod;
			
			if ($this->session->userdata("email"))
			{
				$datos["creador"] =$this->session->userdata("usuario_id");
				$mail=$this->session->userdata("email");
			}
			else
			{
				$datos["creador"] =2;
				$mail="open24ml@gmail.com";
			}
				
				
			$ticket_id = $this->ticket_model->alta($datos);
			$ticket = $this->ticket_model->obtener_por_id($ticket_id);

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
				'newline' => "\r\n"
			);    

			//cargamos la configuración para enviar con gmail
			$this->email->initialize($configGmail);
			
			
			$this->email->from('TecnoHilet');
			$this->email->reply_to("soportamehilet@gmail.com");
			$this->email->to($mail);
			$this->email->subject('Prueba');
			$this->email->message('El codigo de su ticket es: '.$cod);
			$this->email->send();
			

			if ($this->session->userdata("email"))
			redirect('usuarios/index/OK/'.$ticket["codigo"]);
		else
			redirect('welcome/index/OK/'.$ticket["codigo"]);
		}
		else{
			if ($this->session->userdata("email"))
			redirect('usuarios/index/CAMPOSTICKET');
		else
			redirect('welcome/index/CAMPOSTICKET');
		}
		
	}
	
	public function Modificar($ticket_id = ""){
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('asignado', 'Asignado', 'required|trim');
		$this->form_validation->set_rules('estado', 'Estado', 'required|trim');
		$this->form_validation->set_rules('txtSolucion', 'txtSolucion', 'required|trim');

		if($this->form_validation->run()){
		
		$datos = array();
		$datos["asignado"] = set_value("asignado");
		$datos["estado"] = set_value("estado");
		$datos["solucion"] = set_value("txtSolucion");
		if ($datos["estado"] == 5) {
			$datos["fecha_fin"] = date('Y-m-d H:i:s');
		}
			
		$this->ticket_model->modificacion($ticket_id,$datos);
		
			redirect('tickets/listar/OKMODIFICADO');
		}else{
			redirect('tickets/listar/ERRORMODIFICADO');	
		}	
	}
	
	public function listar($op = ""){
		$rol = $this->session->userdata("rol");
		$usuario_id = $this->session->userdata("usuario_id");
		$this->datos["op"] = $op;
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
				redirect('welcome/index/PROHIBIDO');
			}	
		}	
	}
	
	public function baja($usuario_id = ""){
		
		if($usuario_id!=""){
			$this->ticket_model->baja($usuario_id);
			redirect("tickets/listar/OKBORRADO");
		}
		else {
			redirect("tickets/listar/ERRORBORRADO");
		}
		
		
	}
	
	public function TraerTicket($ticket_id = "")
	{
		$rol = $this->session->userdata("rol");
		
		if($rol == 'A')
		{
			$this->datos["ticket"] = $this->ticket_model->obtener_por_id($ticket_id);
			$this->datos["usuarios"] = $this->usuarios_model->listado();
			$this->datos["estados"] = $this->estados_model->listar();
			$this->load->view('modificarTicket', $this->datos);
		}
		else
		{
			Redirect('usuarios/index/PROHIBIDO');
		}
	}
	public function TraerTicketPorCodigo()
	{
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('txtTicket', 'txtTicket', 'required|trim');
		
		if(!$this->form_validation->run())
		{
			if ($this->session->userdata("email")) {
				redirect('usuarios/index/CODIGOINCOMPLETO');	
			}
			else {
				redirect('welcome/index/CODIGOINCOMPLETO');
			}
		}
		
		$codigo = set_value("txtTicket");
		
		if (!$this->datos["ticket"] = $this->ticket_model->obtener_por_codigo($codigo)) {
			if ($this->session->userdata("email")) {
				redirect('usuarios/index/TICKETNOENCONTRADO');	
			}
			else {
				redirect('welcome/index/TICKETNOENCONTRADO');
			}
		}
		if ($usuario_id = $this->session->userdata("usuario_id")) {
			if(($this->datos["ticket"]["creador"] != $usuario_id) && ($this->session->userdata["rol"] == 'U')) {
				redirect('usuarios/index/TICKETNOPROPIETARIO');
			}
		}

		$this->load->view('buscarTicket',$this->datos);

	}
}