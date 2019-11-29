<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipousuario_model extends CI_Model{

	//Pega todos os valores da tabela tbl_hidrocarb
	public function getTipoUsuario(){
		
		$query = $this->db->get('tbl_tipo_usuario');
		return $query->result();
		
	}

	//Pega um registro pelo Id
	public function getTipoUsuarioById($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Id_TUsu', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_tipo_usuario");
			return $query->row();
		}
	}

	//Adiciona um novo registro na tablea tbl_hidrocarb 
	public function adicionar($dados = NULL){
		if ($dados != NULL){
			$this->db->insert('tbl_tipo_usuario', $dados);
		}
	}

	//Edita um registro da tabela tbl_hidrocarb
	public function editar($dadosATT = NULL, $id = NULL){
		if($dadosATT != NULL && $id != NULL){
			$this->db->update('tbl_tipo_usuario', $dadosATT, array('Id_TUsu'=>$id)); 
		}
	}
	
	//Apaga um registro da tabela tbl_hidrocarb
	public function apagar($id = NULL){
		if($id != NULL){
			$this->db->delete('tbl_tipo_usuario', array('Id_TUsu' => $id));
		}
	}

}