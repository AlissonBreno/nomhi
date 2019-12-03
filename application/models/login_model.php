<?php 

class Login_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function logar(){
		$this->db->select('*')->from('tbl_usuario')->where('Ema_Usu',$this->input->post('email'));
		$res = $this->db->get()->result();
		var_dump($res);
		if($res != null){
			$this->session->set_userdata('codigo',$res[0]->Id_Usu);
			$this->session->set_userdata('nome',$res[0]->Nom_Usu);
			$this->session->set_userdata('email',$res[0]->Ema_Usu);
			$this->session->set_userdata('senha',$res[0]->Sen_Usu);
			$this->session->set_userdata('tipo', $res[0]->Tip_Usu);
			$this->session->set_userdata('cpf',$res[0]->Cpf_Usu);
			$this->session->set_userdata('rg',$res[0]->Rg_Usu);
			$this->session->set_userdata('telefone',$res[0]->Tel_Usu);
			$this->session->set_userdata('sobrenome', $res[0]->Sob_Usu);
			$this->session->set_userdata('tentativas', $res[0]->Pon_Usu);
			$this->session->set_userdata('logado','1');
			redirect('dashboard/inicio');
		}else{
			redirect('dashboard');
		}
	}

}

?>