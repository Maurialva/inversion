<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	
	protected $datos=array();

	public function index()
	{
		$this->load->library("form_validation");

		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('asunto', 'Asunto', 'trim|required');
		$this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'mail.apoteosis.x10.mx',
				'smtp_port' => 587,
				'smtp_user' => 'contacto@apoteosis.x10.mx',
				'smtp_pass' => 'mauri2505',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('contacto@apoteosis.x10.mx', 'StatTrack - Contacto');
			$this->email->reply_to(set_value("email"), set_value("nombre"));
			$this->email->to(MAIL_DESTINO);
			//$this->email->cc();
			$this->email->bcc(MAIL_DESTINO);

			$this->email->subject(set_value("asunto"));
			
			$datos=array();
			$datos["nombre"]=set_value("nombre");
			$datos["email"]=set_value("email");
			$datos["asunto"]=set_value("asunto");
			$datos["mensaje"]=set_value("mensaje");


			$plantilla=$this->load->view("recuperacion/email_contacto",$datos,TRUE);
			
			
			$this->email->message($plantilla);

			$this->email->send(FALSE);
			// $this->email->print_debugger();
			redirect("contacto/gracias");
			
		} else {
			//Todo Mal
		}

		if(!$this->session->userdata("uid")){
			$this->load->view('recuperacion/recuperacion',$this->datos);
		}else{
			$this->load->model("usuarios_model");
			$this->datos["usuario_logueado"]=$this->session->userdata("usuario");
			$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
			$this->load->view('principal/principal',$this->datos);
		}

		
	}

	function gracias(){
		
		if(!$this->session->userdata("uid")){
			$this->load->view('recuperacion/confirmacion',$this->datos);
		}else{
			$this->load->model("usuarios_model");
			if ($this->usuarios_model->obtener($this->session->userdata("uid"))["tema"]=="claro") {
				$this->load->view('recuperacion/confirmacion',$this->datos);
			} else {
				$this->load->view('recuperacion/confirmacionoscuro',$this->datos);
			}
		}
		
		
	}
}
