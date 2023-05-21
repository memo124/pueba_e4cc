<?php
class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('SalarioM');
	}
	
	public function index()
	{
		$this->load->view('salarioV');
	}

	public function obtener()
	{
		if ($this->input->is_ajax_request()) {
			$datos = $this->Pago->seleccionar_todo();
			echo json_encode($datos);
		} else {
			echo "'No direct script access allowed'";
		}
	}

	public function agregar()
	{
		if ($this->input->is_ajax_request()) {
			
				$ajax_data = $this->input->post();

				if ($this->Pago->agregar($ajax_data)) {
					$data = array('response' => "success", 'message' => "Data added successfully");
				} else {
					$data = array('response' => "error", 'message' => "failed");
				}
			echo json_encode($data);
		} else {
			echo "'No direct script access allowed'";
		}
	}
	
	public function eliminar()
	{
		if ($this->input->is_ajax_request()) {
			
			$ajax_data = $this->input->post();
			var_dump($ajax_data);
			// if ($this->Usuario->eliminar($idUsuario)) {
			// 	$data = array('response' => "success", 'message' => "Data added successfully");
			// } else {
			// 	$data = array('response' => "error", 'message' => "failed");
			// }
		}
		else {
			echo "'No direct script access allowed'";
		}
	}

	public function editar()
	{
		if ($this->input->is_ajax_request()) {
			
			$ajax_data = $this->input->post();
			unset($ajax_data['data']['type']);

			
			if ($this->Pago->actualizar($ajax_data)) {
				$data = array('response' => "success", 'message' => "Data added successfully");
			} else {
				$data = array('response' => "error", 'message' => "failed");
			}
		echo json_encode($data);
	} else {
		echo "'No direct script access allowed'";
	}
		// $usuario['perfil_usuario'] = $this->input->post('perfil');
		// $usuario['nombre'] = $this->input->post('nombre');
		// $usuario['apellido'] = $this->input->post('apellido');
		// $usuario['email'] = $this->input->post('email');
		// $usuario['rol'] = $this->input->post('rol');
		// $usuario['estado'] = $this->input->post('estado');
		// $this->Usuario->actualizar($usuario,$idUsuario);
		// redirect(base_url().'welcome','refresh');
	}
}
