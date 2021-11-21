<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recuperacion extends CI_Controller {
	
	protected $datos=array();

	public function index()
	{
		
		$this->load->library("form_validation");
		$this->load->model("usuarios_model");
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		

		if ($this->form_validation->run() == TRUE) {
			$email=set_value('email');
			
			if ($this->usuarios_model->verif_email($email)) {
				$u=$this->usuarios_model->obtener($this->usuarios_model->verif_email($email));
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
				$this->email->from('contacto@apoteosis.x10.mx', 'StatTrack Recuperacion');
				$this->email->reply_to(set_value("email"), set_value("nombre"));
				$this->email->to($u["email"]);
				//$this->email->cc(set_value("email"));
				//$this->email->bcc('them@their-example.com');
	
				$this->email->subject("Recuperacion de User/Pass");
				
				$datos=array();
				$datos["mensaje"]="Estimado Usuario de StatTrack.\nSu Nombre de inicio es: {$u['nombre']} \nSu Password es: {$u['password']}\n";
	
	
				$plantilla=$this->load->view("recuperacion/email_recuperacion",$datos,TRUE);
				
				
				$this->email->message($plantilla);
	
				$this->email->send(FALSE);
				
				redirect("recuperacion/gracias");
			}else
			{
				$datos["OP"]="INEXISTENTE";
			}
			
			
		} else {
			$datos["OP"]="MAL";
		}
		
		$this->load->view('recuperacion/recuperacion',$this->datos);
	}

	function gracias(){
		$this->load->view('recuperacion/gracias',$this->datos);
	}
}
