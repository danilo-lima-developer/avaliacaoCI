<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("users_model");
	}

	public function myuser()
	{
		$dados["users"] = $this->users_model->userself();
		$title["title"] = "CONTACTBOOK - Meu Perfil";
		
		$this->load->view('templates/header', $title);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/userself', $dados);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	
	public function edituserself() 
	{
		$id_usuario = $this->session->userdata('usuario_id');
		$dados["user"]  = $this->users_model->show($id_usuario);
		$title["title"] = "Editar Usuário";


		$this->load->view('templates/header', $title);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/edit-userself', $dados);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function update($id)
	{

		$dados = array('nome'=> $this->input->post('inputNome'),
						'email'=> $this->input->post('inputEmail'),
						'cpf'=> $this->input->post('inputCpf'),
						'senha'=> $this->input->post('inputSenha'),
						'fone'=> $this->input->post('inputFone')	
													);

		if(!empty($this->input->post('inputSenha'))){
			$dados['senha'] = md5($this->input->post('inputSenha'));
		}
		
		$this->users_model->updateuserself($id, $dados);
		redirect("users/myuser");
	}

}