<?php 

class Problemas_model extends CI_Model{

	public function getProblemas_Res(){
		$query = $this->db->get('tbl_exer_res');
		return $query->result();	
	}

	
	public function get_EnviaExercicioById($id = NULL, $idu = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Id_Exe', $id);
			$this->db->where('Alu_ExerR',$idu);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exer_res");
			return $query->row();
		}
	}

	public function addExercicio($dados = NULL, $id = NULL, $idu = NULL){

		$opa = $this->problemas_model->get_EnviaExercicioById($id, $idu);
		if($opa != NULL){
			if($opa->Alu_ExerR != $idu){
				if ($dados != NULL){
					$this->db->insert('tbl_exer_res', $dados);
				}
			}
		}else{
			if ($dados != NULL){
				$this->db->insert('tbl_exer_res', $dados);
			}
		}
	}
	

	public function editExercicio($todos = NULL, $id = NULL){
		if($todos != NULL && $id != NULL){
			$this->db->update('tbl_exercicio', $todos, array('Id_Exe'=>$id)); 
		}
	} 

	public function addTent($tent = NULL, $id = NULL){
		if($tent != NULL && $id != NULL){
			$this->db->update('tbl_usuario', $tent, array('Id_Usu'=>$id)); 
		}
	}

}