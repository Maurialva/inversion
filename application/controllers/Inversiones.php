<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inversiones extends CI_Controller {

	protected $datos=array();

	public function __construct()
	{
		parent::__construct();	

		if(!$this->session->userdata("uid")){
			redirect("auth");
		}
		$this->load->model("montos_model");
		$this->load->model("inversiones_model");
		$this->load->model("balances_model");

	}

	public function index($id_inversion="")
	{
		
		if($id_inversion<1 or $this->session->userdata("uid")!=$this->inversiones_model->obtener($id_inversion)["id_usuario"]){
			redirect("inversiones/menu");
		}
		$this->load->library("form_validation");
		$this->form_validation->set_rules('monto', 'Monto', 'trim|required|numeric');

		if ($this->form_validation->run() == TRUE) {
			$this->montos_model->agregar(set_value("monto"),$id_inversion);

			redirect("inversiones/index/$id_inversion");
		}
		
		$this->datos["usuario_logueado"]=$this->session->userdata["usuario"];
		
		$this->datos["aculmulado"]=$this->montos_model->calcular_acumulado($id_inversion);
		$this->balances_model->actualizar($id_inversion,$this->datos["aculmulado"]);
		$this->datos["montos"]=$this->montos_model->listar_deinv($id_inversion);
		$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('inversiones/inversion',$this->datos);
	}
	
	public function borrar($monto_id=""){
		$id=$this->montos_model->obtener_inversion($monto_id);
		$this->montos_model->borrar($monto_id);
		redirect("inversiones/index/".$id["id_inversion"]);
	}
public function menu()
{
	if(!$this->session->userdata("uid")){
		redirect("auth");
	}
	$usuario_logueado=$this->session->userdata["usuario"];
	$this->datos["usuario_logueado"]=$this->session->userdata["usuario"];
	//echo $usuario_logueado;
	//redirect('principal/cambiarpass',$datos);
	$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
	$this->load->view('inversiones/menuinversiones',$this->datos);
	
}
	public function nueva()
	{
		if(!$this->session->userdata("uid")){
			redirect("auth");
			
		}
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules('monto', 'Monto', 'trim|required|numeric');
		$this->form_validation->set_rules('concepto', 'Concepto', 'trim|required|min_length[3]');
		$this->datos["usuario_logueado"]=$this->session->userdata["usuario"];
		if ($this->form_validation->run() == TRUE) {

			$this->load->model("usuarios_model");
			$uid=$this->session->userdata["uid"];
			$this->inversiones_model->agregar(set_value("concepto"),$uid);
			$inv=$this->inversiones_model->ultima($this->session->userdata["uid"]);
			$this->montos_model->agregar(set_value("monto"),$inv['id_inversion']);
			$this->balances_model->crear($inv['id_inversion'],$this->session->userdata["uid"],set_value("concepto"),0);
			redirect("inversiones/confirmarcrear");
		}

		$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('inversiones/nuevainversion',$this->datos);
		
	}


	public function listarxuser()
	{
		
		if(!$this->session->userdata("uid")){
			redirect("auth");
		}
		//$usuario_logueado=$this->session->userdata["usuario"];
		$this->datos["usuario_logueado"]=$this->session->userdata["usuario"];
		//echo $usuario_logueado;
		$this->load->model("inversiones_model");


		$this->datos["inversiones"]=$this->inversiones_model->listarxuser($this->session->userdata["uid"]);
		$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('inversiones/misinversiones',$this->datos);
		
	}
	
	public function borrarinv($id="")
	{

		$this->load->model("inversiones_model");
		$this->load->model("montos_model");
		$this->inversiones_model->borrar($id);
		$this->montos_model->borrar_inversion($id);
		redirect("inversiones/listarxuser");


	}
	public function mostrarinv($id="")
	{

		$this->load->model("inversiones_model");
		$this->inversiones_model->borrar($id);
		redirect("inversiones/listarxuser");


	}
	public function confirmarcrear()
	{
		$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('inversiones/gracias',$this->datos);
	}

	public function balance()
	{

		if(!$this->session->userdata("uid")){
			redirect("auth");
		}
		//$usuario_logueado=$this->session->userdata["usuario"];
		$this->datos["usuario_logueado"]=$this->session->userdata["usuario"];
		//echo $usuario_logueado;
		$this->load->model("balances_model");
		$this->datos["balances"]=$this->balances_model->listar($this->session->userdata["uid"]);
		//$this->datos["montos"]=$this->montos_model->listarxuser($this->session->userdata["uid"]);
		$this->load->model("usuarios_model");
		$this->datos["tema"]=$this->usuarios_model->obtener($this->session->userdata("uid"))["tema"];
		$this->load->view('inversiones/balances2',$this->datos);

	}

}
