<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$title["title"] = "CONTACTBOOK - Login";
		$this->load->view('pages/login', $title);
	}

	public function store()
	{
		$login    = $_POST["inputLogin"];
		$password = md5($_POST["inputPassword"]);
		$user     = $this->login_model->store($login, $password);

		if($user){
			$this->session->set_userdata("logged_user", $user); 
			$this->session->set_userdata("usuario_nome", $user['nome']);
			$this->session->set_userdata("usuario_id", $user['id_usuario']);
			$this->session->set_userdata("perfil", $user['perfil']);
			redirect("mainpage");
		}else{
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		//$this->session->unset_userdata("logged_user");
		redirect('login');
	}
	
}
