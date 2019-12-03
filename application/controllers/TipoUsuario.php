<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoUsuario extends CI_Controller {

	//carrega a lista de Tipo de Usuários
	public function index(){
		$this->load->model('tipousuario_model');

		$dados['tipo_usuarios'] = $this->tipousuario_model->getTipoUsuario();

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('tipo_usuarios', $dados);
		$this->load->view('includes/footer');
	}

	//carrega página de cadastro de novo Tipo de Usuário
	public function cadastrar(){

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('add/tipo_usuario');
		$this->load->view('includes/footer');
	}

	//carrega página de visualização de um determinado registro
	public function visualizar($id = NULL){
			
		if($id==NULL){
			redirect('TipoUsuario');	
		}

		$this->load->model('tipousuario_model');

		$query = $this->tipousuario_model->getTipoUsuarioById($id);

		if($query==NULL){
			redirect('TipoUsuario');	
		}

		$dados['tipo_usuarios'] = $query;


		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('view/tipo_usuario', $dados);
		$this->load->view('includes/footer');
	
	}


	//carrega página de atualização de registros
	public function atualizar($id = NULL){

		if($id==NULL){
			redirect('TipoUsuario');	
		}

		$this->load->model('tipousuario_model');

		$query = $this->tipousuario_model->getTipoUsuarioById($id);


		if($query==NULL){
			redirect('TipoUsuario');	
		}

		$dados['tipo_usuarios'] = $query;

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('edit/tipo_usuario', $dados);
		$this->load->view('includes/footer');

	}

	//Salva novos registros e alterações
	public function salvar(){
		$this->load->model('tipousuario_model');

		$dados['Nom_TUsu'] = $this->input->post('nome');
		$dados['Desc_TUsu'] = $this->input->post('conteudo');

		//Salva o registro alterado
		if($this->input->post('id') != NULL){
			$dadosATT['Nom_TUsu'] = $this->input->post('nome');
			$dadosATT['Desc_TUsu'] = $this->input->post('conteudo');
			
			$this->tipousuario_model->editar($dadosATT, $this->input->post('id'));
			$this->session->set_flashdata('mensagem', 'Edição realizada com Sucesso!');
			redirect('TipoUsuario');
		
		//Salva um novo registro
		} else {
			$this->tipousuario_model->adicionar($dados);
			$this->session->set_flashdata('mensagem', 'Cadastrado realizado com Sucesso!');
			redirect('TipoUsuario');
		}
	}

	//Apaga um registro na lista de Hidrocarbonetos
	public function apagar($id = NULL){
		if($id == NULL){
			redirect('TipoUsuario');
		}

		$this->load->model('tipousuario_model');

		$query = $this->tipousuario_model->getTipoUsuarioById($id);

		if($query != NULL){
			$this->tipousuario_model->apagar($query->Id_TUsu);
			$this->session->set_flashdata('mensagem', 'Exclusão realizada com Sucesso!');
			redirect('TipoUsuario');
		}else{
			$this->session->set_flashdata('erro', 'Exclusão não pode ser realizada');
			redirect('TipoUsuario');
		}

	}


	
}
