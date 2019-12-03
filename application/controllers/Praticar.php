<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praticar extends CI_Controller {

	//carrega página de visualização de um determinado registro
	public function visualizar($id = NULL){
			
		if($id==NULL){
			redirect('Exercicio');	
		}

		//Pega os exercícios
		$this->load->model('exercicio_model');
		$query = $this->exercicio_model->getExercicioById($id);

		//Pega os valores da tabela Hidrocarboneto
		$this->load->model('hidrocarb_model');
		$dadoss['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		if($query==NULL){
			redirect('Exercicio');	
		}

		$dados['exercicios'] = $query;


		$this->load->view('includes/header', $dadoss);
		$this->load->view('view/exercicio_R', $dados);
		$this->load->view('includes/footer');
	
	}

	public function sucesso(){
			
		//Pega os valores da tabela Hidrocarboneto
		$this->load->model('hidrocarb_model');
		$dadoss['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadoss);
		$this->load->view('view/sucesso');
		$this->load->view('includes/footer');
	
	}

	public function falha(){
			
		//Pega os valores da tabela Hidrocarboneto
		$this->load->model('hidrocarb_model');
		$dadoss['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadoss);
		$this->load->view('view/falha');
		$this->load->view('includes/footer');
	
	}
	public function enviar_resposta(){
		$this->load->model('problemas_model');
		$dados['Nom_ExerR'] = $this->input->post('nome');
		$dados['Tip_ExerR'] = $this->input->post('assunto');
		$dados['Alu_ExerR'] = $this->session->userdata('codigo');
		$dados['Id_Exe'] = $this->input->post('id');

		$cor = $this->input->post('correta');
		$op = $this->input->post('opcao');

		$env = $this->input->post('env') + 1;
		$todos['Env_Exe'] = $env;
		$t = $this->input->post('tentativas') + 1;

		$tent['Pon_Usu'] = $t;


		if($cor == $op){
			$this->problemas_model->addExercicio($dados,$this->input->post('id'), $this->session->userdata('codigo'));
			$this->problemas_model->editExercicio($todos,$this->input->post('id'));
			$this->problemas_model->addTent($tent,$this->session->userdata('codigo'));
			
			redirect('praticar/sucesso');
		}else{
			$this->problemas_model->addExercicio($dados,$this->input->post('id'), $this->session->userdata('codigo'));
			$this->problemas_model->editExercicio($todos,$this->input->post('id'));
			
			redirect('praticar/falha');
		}
	}
	
}
