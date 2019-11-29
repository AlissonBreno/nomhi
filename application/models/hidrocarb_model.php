<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hidrocarb_model extends CI_Model{

	//Pega todos os valores da tabela tbl_hidrocarb
	public function getHidrocarb(){
		
		$query = $this->db->get('tbl_hidrocarb');
		return $query->result();
		
	}

	//Pega um registro pelo Id
	public function getHidrocarbById($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Id_Hidro', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_hidrocarb");
			return $query->row();
		}
	}

	//Adiciona um novo registro na tablea tbl_hidrocarb 
	public function adicionar($dados = NULL){
		if ($dados != NULL){
			$this->db->insert('tbl_hidrocarb', $dados);
		}
	}

	//Edita um registro da tabela tbl_hidrocarb
	public function editar($dadosATT = NULL, $id = NULL){
		if($dadosATT != NULL && $id != NULL){
			$this->db->update('tbl_hidrocarb', $dadosATT, array('Id_Hidro'=>$id)); 
		}
	}
	
	//Apaga um registro da tabela tbl_hidrocarb
	public function apagar($id = NULL){
		if($id != NULL){
			$this->db->delete('tbl_hidrocarb', array('Id_Hidro' => $id));
		}
	}

}