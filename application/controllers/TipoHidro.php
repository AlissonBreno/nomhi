<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoHidro extends CI_Controller {

	//carrega a lista de hidrocarbonetos
	public function index(){

		$this->load->model('hidrocarb_model');
		$dados['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dados);
		$this->load->view('hidrocarbonetos');
		$this->load->view('includes/footer');
	}

	//carrega página de cadastro de novo hidrocarboneto
	public function cadastrar(){

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dados['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dados);
		$this->load->view('add/hidrocarboneto');
		$this->load->view('includes/footer');
	}

	//carrega página de visualização de um determinado registro
	public function visualizar($id = NULL){
			
		if($id==NULL){
			redirect('tipoHidro');	
		}

		$this->load->model('hidrocarb_model');

		$query = $this->hidrocarb_model->getHidrocarbById($id);

		if($query==NULL){
			redirect('tipoHidro');	
		}

		$dados['hidrocarbonetos'] = $query;

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('view/hidrocarboneto', $dados);
		$this->load->view('includes/footer');
	
	}


	//carrega página de atualização de registros
	public function atualizar($id = NULL){

		if($id==NULL){
			redirect('tipoHidro');	
		}

		$this->load->model('hidrocarb_model');

		$query = $this->hidrocarb_model->getHidrocarbById($id);


		if($query==NULL){
			redirect('tipoHidro');	
		}

		$dados['hidrocarbonetos'] = $query;

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH);
		$this->load->view('edit/hidrocarboneto', $dados);
		$this->load->view('includes/footer');

	}

	//Salva novos registros e alterações
	public function salvar(){
		$this->load->model('hidrocarb_model');

		$dados['Nom_Hidro'] = $this->input->post('nome');
		$dados['Desc_Hidro'] = $this->input->post('conteudo');

		//Salva o registro alterado
		if($this->input->post('id') != NULL){
			$dadosATT['Nom_Hidro'] = $this->input->post('nome');
			$dadosATT['Desc_Hidro'] = $this->input->post('conteudo');
			
			$this->hidrocarb_model->editar($dadosATT, $this->input->post('id'));
			$this->session->set_flashdata('mensagem', 'Edição realizada com Sucesso!');
			redirect('tipoHidro');
		
		//Salva um novo registro
		} else {
			$this->hidrocarb_model->adicionar($dados);
			$this->session->set_flashdata('mensagem', 'Cadastrado realizado com Sucesso!');
			redirect('tipoHidro');
		}
	}

	//Apaga um registro na lista de Hidrocarbonetos
	public function apagar($id = NULL){
		if($id == NULL){
			redirect('tipoHidro');
		}

		$this->load->model('hidrocarb_model');

		$query = $this->hidrocarb_model->getHidrocarbById($id);

		if($query != NULL){
			$this->hidrocarb_model->apagar($query->Id_Hidro);
			$this->session->set_flashdata('mensagem', 'Exclusão realizada com Sucesso!');
			redirect('tipoHidro');
		}else{
			$this->session->set_flashdata('erro', 'Exclusão não pode ser realizada');
			redirect('tipoHidro');
		}

	}

	//carrega uma pagina de exercício para o usuário
	//carrega página de visualização de um determinado registro
	public function carregarTipo($id = NULL){
			
		if($id==NULL){
			redirect('tipoHidro');	
		}

		$this->load->model('hidrocarb_model');

		$query = $this->hidrocarb_model->getHidrocarbById($id);

		if($query==NULL){
			redirect('tipoHidro');	
		}

		$dados['hidrocarbonetos'] = $query;

		$this->load->model('exercicio_model');
		$dadosE['exercicios'] = $this->exercicio_model->getExercicio();

		//carrega listinha no header
		$this->load->model('hidrocarb_model');
		$dadosH['hidrocarbonetos'] = $this->hidrocarb_model->getHidrocarb();

		$this->load->view('includes/header', $dadosH + $dadosE);
		$this->load->view('view/p_hidrocarboneto', $dados);
		$this->load->view('includes/footer');
	
	}
}
