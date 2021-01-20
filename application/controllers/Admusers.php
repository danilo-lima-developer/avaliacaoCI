<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admusers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("users_model");
	}

	public function index()
	{
		$dados["users"]  = $this->users_model->index();
		$title["title"] = "Usuários";

		$this->load->view('templates/header', $title);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/adm-users', $dados);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function new()
	{
		$title["title"] = "Novo Usuário";
		$this->load->view('templates/header', $title);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/new-user');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function store()
	{
		$dados = array(
			'nome' => $this->input->post('inputName'),
			'email' => $this->input->post('inputEmail'),
			'senha' => md5($this->input->post('inputPassword')),
			'cpf' => $this->input->post('inputCpf'),
			'fone' => $this->input->post('inputTelephone'),
			'perfil' => $this->input->post('inputPerfil')
		);
		$this->users_model->store($dados);
		redirect("admusers");
	}

	public function edit($id)
	{
		$dados["user"]  = $this->users_model->show($id);
		$title["title"] = "Editar Usuário";


		$this->load->view('templates/header', $title);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/edit-users', $dados);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function update($id)
	{

		$dados = array(
			'nome' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'fone' => $this->input->post('fone')
		);

		if (!empty($this->input->post('senha'))) {
			$dados['senha'] = md5($this->input->post('senha'));
		}

		$this->users_model->update($id, $dados);
		redirect("admusers");
	}
}
