<?php

class Register_model extends CI_Model
{
	public function store($email, $password)
	{
		//$this->db->select('id');
		$this->db->where("email", $email);
		$this->db->where("senha", $password);
		$user = $this->db->get("tb_usuarios")->row_array();
		return $user;
	}

	public function submit($user)
	{
		$this->db->set('nome', $user['nome']);
		$this->db->set('email', $user['email']);
		$this->db->set('senha', $user['senha']);
		$this->db->set('cpf', $user['cpf']);
		$this->db->set('fone', $user['fone']);
		$this->db->insert("tb_usuarios");
	}
	
	public function verificarCPf($cpf)
	{
		$this->db->select('*');
		$this->db->from('tb_usuarios');
		$this->db->where('cpf', $cpf);
		$dados = $this->db->get()->row_array();
		if (!empty($dados)) {
			return true;
		} else {
			return false;
		}
	}
	
}
