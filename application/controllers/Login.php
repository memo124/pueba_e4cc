<?php


class Login extends CI_Controller
{
	public function __construct()
    {
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();
		$this->load->helper('form');
        $this->load->library(['form_validation', 'session']);
		$this->load->helper('url');
		$this->load->model('LoginM');
    }	

	public function index()
    {
        $this->load->view('login');
    }

	public function log()
	{

		$usuario = $this->input->post('usuario');
		$contrasena = $this->input->post('contrasena');
		$user = $this->LoginM->obtenerUsuarios($usuario);
		if (!$user) {
			redirect('/','refresh');			
		}

		if ($user->estado == 0) {
			redirect('/','refresh');			
		}

		if ($user->contrasena != $contrasena) {
			redirect('/','refresh');			
		}

		$this->session->set_userdata($user);

		redirect('/Welcome','refresh');			

	}
}
