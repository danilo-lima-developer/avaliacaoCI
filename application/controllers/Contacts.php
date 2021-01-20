<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        permission();
        $this->load->model("contacts_model");
    }

    public function index()
    {
        $title['title'] = " MEUS CONTATOS";
        $dados["contacts"] = $this->contacts_model->mycontacts_index();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/nav-top');
        $this->load->view('pages/contacts', $dados);
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function new()
    {
        $title['title'] = "NOVO CONTATO";



        $this->load->view('templates/header', $title);
        $this->load->view('templates/nav-top');
        $this->load->view('pages/new-contact');
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function submit()
    {
        $dados = array(
            'nomeContato' => $this->input->post('inputNomeContato'),
            'empresaContato' => $this->input->post('inputEmpresaContato'),
            'cargoContato' => $this->input->post('inputCargoContato'),
            'celularContato' => $this->input->post('inputCelularContato'),
            'emailContato' => $this->input->post('inputEmailContato')
        );
        $dados["user_id"] = $_SESSION["logged_user"]["id_usuario"];
        $this->contacts_model->submit($dados);
        redirect("contacts");
    }

    public function edit($id_contato)
    {
        $dados["contact"]  = $this->contacts_model->show($id_contato);
        $title["title"] = " Editar Contato";
        if (empty($dados["contact"])) {
            redirect('contacts');
        } else {
            
            $this->load->view('templates/header', $title);
            $this->load->view('templates/nav-top');

            $this->load->view('pages/edit-contact', $dados);
            $this->load->view('templates/footer');
            $this->load->view('templates/js');
        }
    }

    public function update($id_contato)
    {
        $dados = array(
            'nomeContato' => $this->input->post('inputNome'),
            'emailContato' => $this->input->post('inputEmail'),
            'celularContato' => $this->input->post('inputFone'),
            'empresaContato' => $this->input->post('inputEmpresa'),
            'cargoContato' => $this->input->post('inputCargo')
        );

        $this->contacts_model->update($id_contato, $dados);
        redirect("contacts");
    }

    public function destroy($id_contato)
    {
        $this->contacts_model->destroy($id_contato);
        redirect("contacts");
    }

    public function search()
	{
		$this->load->model("search_model");
		$title["title"] = "Resultados para '" . $_POST["busca"] . "'";
		$dados["contacts"] = $this->search_model->buscar($_POST);

		$this->load->view('templates/header', $title);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/resultsearch', $dados);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

}
