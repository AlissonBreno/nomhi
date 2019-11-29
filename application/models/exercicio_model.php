<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio_model extends CI_Model{

	//Pega todos os valores da tabela tbl_hidrocarb
	public function getExercicio(){
		
		$query = $this->db->get('tbl_exercicio');
		return $query->result();
		
	}

	//Pega um registro pelo Id
	public function getExercicioById($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Id_Exe', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exercicio");
			return $query->row();
		}
	}

	//Adiciona um novo registro na tablea tbl_hidrocarb 
	public function adicionar($dados = NULL){
		if ($dados != NULL){
			$this->db->insert('tbl_exercicio', $dados);
		}
	}

	//Edita um registro da tabela tbl_hidrocarb
	public function editar($dadosATT = NULL, $id = NULL){
		if($dadosATT != NULL && $id != NULL){
			$this->db->update('tbl_exercicio', $dadosATT, array('Id_Exe'=>$id)); 
		}
	}
	
	//Apaga um registro da tabela tbl_hidrocarb
	public function apagar($id = NULL){
		if($id != NULL){
			$this->db->delete('tbl_exercicio', array('Id_Exe' => $id));
		}
	}

}