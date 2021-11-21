<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	var $datos=array();
	
	public function __construct(){
		parent::__construct();		

		if(!$this->session->userdata("uid")){
			redirect("auth");
			
		}
		$this->load->model("usuarios_model");
		$this->datos["usuario_logueado"]=$this->session->userdata("usuario");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		//$this->load->model("notas_model");
	}
	
	public function index()
	{
	redirect("principal/principal");
	
	}
	
	public function principal(){
		
		//$this->datos["notas"]=$this->notas_model->listar();
		$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('principal/principal',$this->datos);
		
	} 
	public function cambiarpass(){
		
		if(!$this->session->userdata("uid")){
			redirect("auth");
			
		}
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmacion', 'Confirmacion', 'required|matches[password]');
		$this->load->model("usuarios_model");
		if ($this->form_validation->run() == FALSE){
            if($this->input->post()){
				$datos["OP"]="MAL";
			}
        }else{
			
			
			//recuperar del form
			$password=set_value("password");
			$this->usuarios_model->cambiarpass($this->session->userdata["uid"],$password) ;
                       
        }
		$usuario_logueado=$this->session->userdata["usuario"];
		$this->datos["usuario_logueado"]=$this->session->userdata["usuario"];
		//echo $usuario_logueado;
		//redirect('principal/cambiarpass',$datos);
	
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('usuarios/cambiarpass',$this->datos);
		
	} 
	public function cambiodetema ()
	{
		$this->load->model("usuarios_model");
		if ($this->usuarios_model->obtener($this->session->userdata("uid"))["tema"]=="claro") {
			$this->usuarios_model->cambiodetema($this->session->userdata("uid"),'oscuro');
		} else {
			$this->usuarios_model->cambiodetema($this->session->userdata("uid"),'claro');
		}
		

		redirect("principal");

	}
}
