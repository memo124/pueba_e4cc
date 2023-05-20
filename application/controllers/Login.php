<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('LoginM');
    }	

	public function index()
    {
        $this->load->view('login');
    }

	public function log()
	{
		if ($this->input->is_ajax_request()) {
			
			$ajax_data = $this->input->post();

			$usuario = $ajax_data['usuario'];
			$contrasena = $ajax_data['contrasena'];

			$user = $this->LoginM->obtenerUsuarios($usuario);

			if (!$user) {
				$data = array('response' => "error", 'message' => "Usuario no existente");
			}

			if ($user->estado == 0) {
				$data = array('response' => "error", 'message' => "Usuario inactivo");
			}

			if ($user->contrasena != $contrasena) {
				$data = array('response' => "error", 'message' => "Contraseña incorrecta");
			}
	        redirect(base_url('/welcome/index'),'refresh');
			// hea(base_url('/welcome/index')); 

		}
		// $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        // $this->form_validation->set_rules('contrasena', 'Contrasena', 'required');
		// if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('login');
        // }


	}
}
