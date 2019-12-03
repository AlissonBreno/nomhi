<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$this->load->view('login');
	}

	public function logar(){
		$this->load->model('login_model');	
		$this->login_model->logar();
	}

	public function sair(){		
		$this->session->sess_destroy();
		redirect('dashboard');
	}

	public function inicio(){

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->model('problemas_model');
		$dados['exercicios'] = $this->problemas_model->getProblemas_Res();

		$this->load->model('usuario_model');
		$campos['usuarios'] = $this->usuario_model->getUsuario();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('dashboard', $dados + $campos);
		$this->load->view('includes/footer');

	}

	
}
