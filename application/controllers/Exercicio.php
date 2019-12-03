<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {

	//carrega a lista de Tipo de Usuários
	public function index(){

		//Pega os valores da tabela exercícios
		$this->load->model('exercicio_model');
		$dados['exercicios'] = $this->exercicio_model->getExercicio();

		//Pega os valores da tabela Hidrocarboneto
		$this->load->model('hidrocarb_model');
		$dadoss['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadoss);
		$this->load->view('exercicios', $dados);
		$this->load->view('includes/footer');
	}

	//carrega página de cadastro de novo Tipo de Usuário
	public function cadastrar(){

		//Pega os valores da tabela Hidrocarboneto
		$this->load->model('hidrocarb_model');
		$dados['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dados);
		$this->load->view('add/exercicio');
		$this->load->view('includes/footer');
	}

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
		$this->load->view('view/exercicio', $dados);
		$this->load->view('includes/footer');
	
	}


	//carrega página de atualização de registros
	public function atualizar($id = NULL){

		if($id==NULL){
			redirect('Exercicio');	
		}

		//Pega um valor da tabela exercício pelo id
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
		$this->load->view('edit/exercicio', $dados);
		$this->load->view('includes/footer');

	}

	//Salva novos registros e alterações
	public function salvar(){
		$this->load->model('exercicio_model');

		$dados['Nom_Exe'] = $this->input->post('nome');
		$dados['Tip_Exe'] = $this->input->post('tipo');
		$dados['Des_Exe'] = $this->input->post('enunciado');
		$dados['ResC_Exe'] = $this->input->post('resp_correta');
		$dados['Op1_Exe'] = $this->input->post('op1');
		$dados['Op2_Exe'] = $this->input->post('op2');
		$dados['Op3_Exe'] = $this->input->post('op3');
		$dados['Op4_Exe'] = $this->input->post('op4');
		$dados['Env_Exe'] = 0;

		//Salva o registro alterado
		if($this->input->post('id') != NULL){
			$dadosATT['Nom_Exe'] = $this->input->post('nome');
			$dadosATT['Tip_Exe'] = $this->input->post('tipo');
			$dadosATT['Des_Exe'] = $this->input->post('enunciado');
			$dadosATT['ResC_Exe'] = $this->input->post('resp_correta');
			$dadosATT['Op1_Exe'] = $this->input->post('op1');
			$dadosATT['Op2_Exe'] = $this->input->post('op2');
			$dadosATT['Op3_Exe'] = $this->input->post('op3');
			$dadosATT['Op4_Exe'] = $this->input->post('op4');
			$dadosATT['Env_Exe'] = $this->input->post('tentativas');
			
			$this->exercicio_model->editar($dadosATT, $this->input->post('id'));
			$this->session->set_flashdata('mensagem', 'Edição realizada com Sucesso!');
			redirect('Exercicio');
		
		//Salva um novo registro
		} else {
			$this->exercicio_model->adicionar($dados);
			$this->session->set_flashdata('mensagem', 'Cadastrado realizado com Sucesso!');
			redirect('Exercicio');
		}
	}

	//Apaga um registro na lista de Hidrocarbonetos
	public function apagar($id = NULL){
		if($id == NULL){
			redirect('Exercicio');
		}

		$this->load->model('exercicio_model');

		$query = $this->exercicio_model->getExercicioById($id);

		if($query != NULL){
			$this->exercicio_model->apagar($query->Id_Exe);
			$this->session->set_flashdata('mensagem', 'Exclusão realizada com Sucesso!');
			redirect('Exercicio');
		}else{
			$this->session->set_flashdata('erro', 'Exclusão não pode ser realizada');
			redirect('Exercicio');
		}

	}


	
}
