<?php

	class Users_model extends CI_model
	{
		public function index()
		{
			return $this->db->get("tb_usuarios")->result_array();
		}


		public function store($user)
		{
			$this->db->set('nome', $user['nome']);
			$this->db->set('email', $user['email']);
			$this->db->set('senha', $user['senha']);
			$this->db->set('cpf', $user['cpf']);
			$this->db->set('fone', $user['fone']);
			$this->db->set('perfil', $user['perfil']);
			$this->db->insert("tb_usuarios");
		}

		public function show($id)
		{
			return $this->db->get_where("tb_usuarios", array(
				"id_usuario" => $id
			))->row_array();
		}

		public function update($id, $dados)
		{
			if(!empty($dados['senha'])){
				$this->db->set('senha', $dados['senha']);
			}			
			$this->db->set('nome', $dados['nome']);
			$this->db->set('email', $dados['email']);
			$this->db->set('fone', $dados['fone']);
			$this->db->where("id_usuario", $id);
			return $this->db->update("tb_usuarios");
		}

/* MODEL DA PÁGINA DE USUÁRIO */

		public function userself()
		{
			$this->db->where("id_usuario", $_SESSION["logged_user"]["id_usuario"]);
			return $this->db->get("tb_usuarios")->row_array();
		}

		public function updateuserself($id, $dados)
		{
			if(!empty($dados['senha'])){
				$this->db->set('senha', $dados['senha']);
			}			
			$this->db->set('nome', $dados['nome']);
			$this->db->set('email', $dados['email']);
			$this->db->set('cpf', $dados['cpf']);
			$this->db->set('fone', $dados['fone']);
			$this->db->where("id_usuario", $id);
			return $this->db->update("tb_usuarios");
		}

		
	}