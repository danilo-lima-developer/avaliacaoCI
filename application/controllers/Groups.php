<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        permission();
        $this->load->model("groups_model");
    }

    public function index()
    {
        $title['title'] = " MEUS GRUPOS";
        $dados["groups"] = $this->groups_model->mygroups_index();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/nav-top');
        $this->load->view('pages/groups', $dados);
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function new()
    {
        $title['title'] = "NOVO GRUPO";



        $this->load->view('templates/header', $title);
        $this->load->view('templates/nav-top');
        $this->load->view('pages/new-group');
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function submit()
    {




        $dados = array(
            'nomeGrupo' => $this->input->post('inputNomegrupo'),
            'categoriaGrupo' => $this->input->post('inputCaregoriagrupo'),
        );


        foreach ($dados['tipo_pessoa_enviar'] as $key => $value) {
            if ($key) {
                $dados_pessoas_detidas[] = array(
                    'tipopessoa' => $value,
                    'numerobo' => $dados['numerobo']
                );
            }
        };




        $dados["user_id"] = $_SESSION["logged_user"]["id_usuario"];

       
        $id_grupo =$this->groups_model->submit($dados);
        foreach ($dados_pessoas_detidas as $key => $value) {
			$this->occurrences_model->submitGrupoContatos($value, $id_grupo);
		}
        redirect("groups");
    }

    public function edit($id_grupo)
    {
        $dados["contact"]  = $this->groups_model->show($id_grupo);
        $title["title"] = "CONTATO - Editar Contato";
        if (empty($dados["contact"])) {
            redirect('groups');
        } else {

            $this->load->view('templates/header', $title);
            $this->load->view('templates/nav-top');

            $this->load->view('pages/edit-contact', $dados);
            $this->load->view('templates/footer');
            $this->load->view('templates/js');
        }
    }

    public function update($id_grupo)
    {
        $dados = array(
            'nomeContato' => $this->input->post('inputNome'),
            'emailContato' => $this->input->post('inputEmail'),
            'celularContato' => $this->input->post('inputFone'),
            'empresaContato' => $this->input->post('inputEmpresa'),
            'cargoContato' => $this->input->post('inputCargo')
        );

        $this->groups_model->update($id_grupo, $dados);
        redirect("groups");
    }

    public function destroy($id_grupo)
    {
        $this->groups_model->destroy($id_grupo);
        redirect("groups");
    }


}
