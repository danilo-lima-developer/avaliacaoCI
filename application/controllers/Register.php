<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}

	public function index()
	{
		$title["title"] = "CONTACTBOOK - Registro";
		$this->load->view('pages/register', $title);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}


	public function submit()
	{
		$dados = array(
			'nome' => $this->input->post('inputName'),
			'email' => $this->input->post('inputEmail'),
			'senha' => md5($this->input->post('inputPassword')),
			'cpf' => $this->input->post('inputCpf'),
			'fone' => $this->input->post('inputTelephone'),
		);
		$this->register_model->submit($dados);
		redirect("login");
    }
    
	
	public function Ajaxvalidar(){
		$cpf = $this->input->post('cpf');		
		$retornar = $this->register_model->verificarCPf($cpf);
		echo json_encode($retornar,JSON_UNESCAPED_UNICODE);
	}
}
