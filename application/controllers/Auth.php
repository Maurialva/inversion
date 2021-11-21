<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		redirect("auth/login");
	}
	
	public function login(){
		$datos=array();
		$this->load->library('form_validation');

		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
            if($this->input->post()){
				$datos["OP"]="MAL";
			}
        }else{
			$this->load->model("usuarios_model");
			
			//recuperar del form
			$usuario=set_value("usuario"); //metodo form_validation (preferido)
			$password=set_value("password");

			if($usuario_id=$this->usuarios_model->verificar($usuario,$password)){
				$u=$this->usuarios_model->obtener($usuario_id);

				$this->session->set_userdata("uid",$u["id_usuario"]);
				$this->session->set_userdata("usuario",$u["nombre"]);

				redirect("principal/index"); 
			}else{
				//usuario incorrecto
				$datos["OP"]="INCORRECTO";
			}
                       
        }
		$this->load->view('principal/login',$datos);
		
	}

	public function salir(){
		$this->session->sess_destroy();
		redirect("auth");
	}
	
	public function principal()
	{
		redirect("principal/principal");
	}
	public function nuevo()
	{
		redirect("inversiones");
	}

	public function nuevouser()
	{
		$datos=array();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('nombre','Nombre','trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirmacion', 'Confirmacion', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
            if($this->input->post()){
				$datos["OP"]="MAL";
			}
        }else{
			$this->load->model("usuarios_model");
			
			//recuperar del form
			$usuario=set_value("nombre"); //metodo form_validation (preferido)
			$password=set_value("password");
			$email=set_value("email");


			if($this->usuarios_model->verif_nombre($usuario)==false and $this->usuarios_model->verif_email($email)==false){
				$this->usuarios_model->agregar($usuario,$password,$email);
				redirect("auth/login"); 
			}else{
				$datos["OP"]="REPETIDO";
			}
                       
        }
		$this->load->view('usuarios/crearusuario',$datos);
		
	}

	public function recuperar()
	{
		redirect("recuperacion");
	}

	public function control()
	{
		$datos=array();
		if($this->session->userdata("usuario")!="admin"){
			redirect("auth");
		}
		$this->load->model("usuarios_model");
		$usuarios=$this->usuarios_model->listar();
		$datos["usuarios"]=$usuarios;
		$usuario_logueado=$this->session->userdata["usuario"];
		$datos["usuario_logueado"]=$this->session->userdata["usuario"];
		$datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('usuarios/controlarusuarios',$datos);

	}

	public function borrarusuario($id_a_borrar="")
	{
		$this->load->model("usuarios_model");
		$this->load->model("inversiones_model");
		$this->load->model("montos_model");

		$inversiones=$this->inversiones_model->listarxuser($id_a_borrar);
		foreach($inversiones as $i)
		{
			$this->montos_model->borrar_inversion($i["id_inversion"]);
		}
		$this->inversiones_model->borrarporusuario($id_a_borrar);
		$this->usuarios_model->eliminar($id_a_borrar);

		redirect("auth/control");
	}
}
