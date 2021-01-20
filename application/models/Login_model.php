<?php

class Login_model extends CI_Model
{
	public function store($email, $password)
	{
		//$this->db->select('id');
		$this->db->where("email", $email);
		$this->db->where("senha", $password);
		$user = $this->db->get("tb_usuarios")->row_array();
		return $user;
	}

	
	
}
