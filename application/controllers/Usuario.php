<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	//carrega a lista de Usuários
	public function index(){
		$this->load->model('usuario_model');
		$dados['usuarios'] = $this->usuario_model->getUsuario();

		// Pega o tipo usuário
		$this->load->model('tipousuario_model');
		$dadoss['tipo_usuarios'] = $this->tipousuario_model->getTipoUsuario();

		$this->load->view('includes/header', $dadoss);
		$this->load->view('usuarios', $dados);
		$this->load->view('includes/footer');
	}

	//carrega página de cadastro de novo Tipo de Usuário
	public function cadastrar(){
		// Pega o tipo usuário
		$this->load->model('tipousuario_model');
		$dados['tipo_usuarios'] = $this->tipousuario_model->getTipoUsuario();

		$this->load->view('includes/header');
		$this->load->view('add/usuario', $dados);
		$this->load->view('includes/footer');
	}

	//carrega página de visualização de um determinado registro
	public function visualizar($id = NULL){
			
		if($id==NULL){
			redirect('TipoUsuario');	
		}

		//Pega Usuários
		$this->load->model('usuario_model');
		$query = $this->usuario_model->getUsuarioById($id);


		//Pega tipo usuários
		$this->load->model('tipousuario_model');
		$dadosTu['tipo_usuarios'] = $this->tipousuario_model->getTipoUsuario();

		
		if($query==NULL){
			redirect('TipoUsuario');	
		}

		$dados['usuarios'] = $query;


		$this->load->view('includes/header', $dadosTu);
		$this->load->view('view/usuario', $dados);
		$this->load->view('includes/footer');
	
	}


	//carrega página de atualização de registros
	public function atualizar($id = NULL){

		if($id==NULL){
			redirect('Usuario');	
		}

		//Pega Usuários
		$this->load->model('usuario_model');
		$query = $this->usuario_model->getUsuarioById($id);


		//Pega tipo usuários
		$this->load->model('tipousuario_model');
		$dadosTu['tipo_usuarios'] = $this->tipousuario_model->getTipoUsuario();


		if($query==NULL){
			redirect('Usuario');	
		}

		$dados['usuarios'] = $query;

		$this->load->view('includes/header', $dadosTu);
		$this->load->view('edit/usuario', $dados);
		$this->load->view('includes/footer');

	}

	//Salva novos registros e alterações
	public function salvar(){
		$this->load->model('usuario_model');

		$dados['Nom_Usu'] = $this->input->post('nome');
		$dados['Sob_Usu'] = $this->input->post('sobrenome');
		$dados['Ema_Usu'] = $this->input->post('email');
		$dados['Sen_Usu'] = 'ifsuldeminas';
		$dados['End_Usu'] = $this->input->post('endereco');
		$dados['Tel_Usu'] = $this->input->post('telefone');
		$dados['Cpf_Usu'] = $this->input->post('cpf');
		$dados['Rg_Usu'] = $this->input->post('rg');
		$dados['Tip_Usu'] = $this->input->post('tipo');
		$dados['Pon_Usu'] = 0;

	

		//Salva o registro alterado
		if($this->input->post('id') != NULL){
			$dadosATT['Nom_Usu'] = $this->input->post('nome');
			$dadosATT['Sob_Usu'] = $this->input->post('sobrenome');
			$dadosATT['Ema_Usu'] = $this->input->post('email');
			$dadosATT['Sen_Usu'] = $this->input->post('senha');
			$dadosATT['End_Usu'] = $this->input->post('endereco');
			$dadosATT['Tel_Usu'] = $this->input->post('telefone');
			$dadosATT['Cpf_Usu'] = $this->input->post('cpf');
			$dadosATT['Rg_Usu'] = $this->input->post('rg');
			$dadosATT['Tip_Usu'] = $this->input->post('tipo');
			$dadosATT['Pon_Usu'] = $this->input->post('pontuacao');
			
			$this->usuario_model->editar($dadosATT, $this->input->post('id'));
			$this->session->set_flashdata('mensagem', 'Edição realizada com Sucesso!');
			redirect('Usuario');
		
		//Salva um novo registro
		} else {
			$this->usuario_model->adicionar($dados);
			$this->session->set_flashdata('mensagem', 'Cadastrado realizado com Sucesso!');
			redirect('Usuario');
		}
	}

	//Apaga um registro na lista de Hidrocarbonetos
	public function apagar($id = NULL){
		if($id == NULL){
			redirect('Usuario');
		}

		$this->load->model('usuario_model');

		$query = $this->usuario_model->getUsuarioById($id);

		if($query != NULL){
			$this->usuario_model->apagar($query->Id_Usu);
			$this->session->set_flashdata('mensagem', 'Exclusão realizada com Sucesso!');
			redirect('Usuario');
		}else{
			$this->session->set_flashdata('erro', 'Exclusão não pode ser realizada');
			redirect('Usuario');
		}

	}


	
}
